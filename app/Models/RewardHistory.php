<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RewardHistory extends Model
{
    use HasFactory;

    protected $table = 'reward_histories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'reward_id',
        'customer_id',
    ];

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->select(['id', 'name', 'dist_id', 'first_last_name']);
    }

    public function getAll($condition)
    {
        $query = $this->select([
                        'reward_histories.id',
                        'reward_histories.user_id',
                        'reward_histories.customer_id',
                        DB::raw('DATE(reward_histories.created_at) as date_reward'),
                    ])
                    ->with('user', 'user.distributor')
                    ->groupBy('reward_histories.user_id', 'reward_histories.customer_id', 'date_reward');

        if ($condition->customer_id) {
            $query->where('customer_id', 'like', '%' . $condition->customer_id . '%');
        }

        if ($condition->user_name) {
            $query->whereRelation('user', 'users.first_last_name', 'like', '%' . $condition->user_name . '%');
        }

        if ($condition->distributor) {
            $query->join('users', 'users.id', '=', 'reward_histories.user_id')
                ->leftJoin('distributor', 'distributor.id', '=', 'users.dist_id')
                ->where('distributor.name', 'like', '%' . $condition->distributor . '%');
        }

        if ($condition->per_page) {
            $results = $query->paginate($condition->per_page);
        } else {
            $results = $query->paginate(10);
        }

        foreach ($results->items() as $item) {
            $rewards = $this->where([
                'reward_histories.user_id' => $item->user_id,
                'reward_histories.customer_id' => $item->customer_id,    
            ])->whereDate('reward_histories.created_at', $item->date_reward)
            ->join('rewards', 'rewards.id', '=', 'reward_histories.reward_id')
            ->select([
                'reward_id',
                'rewards.name',
                DB::raw('COUNT(reward_histories.reward_id) as reward_count')
            ])
            ->groupBy('reward_histories.reward_id')
            ->get();

            $list_rewards = Reward::select('id as reward_id', 'name')->get();
            $turn_number = 0;
            foreach ($list_rewards as $reward) {
                $reward->reward_count = 0;
                foreach ($rewards as $rew) {
                   if ($reward['reward_id'] == $rew['reward_id']) {
                        $reward->reward_count = $rew['reward_count'];
                        $turn_number += $reward['reward_count'];
                        break;
                   }
                }
            }
            $item->turn_number = $turn_number;
            $item->purchase_quantity = $turn_number * 3;
            $item->rewards = $list_rewards;
        }

        return $results;
    }
    
    function getCountByCustomer($customer_id)
    {
        return $this->where('customer_id', $customer_id)->count();
    }
}
