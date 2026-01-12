<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reward extends Model
{
    use HasFactory;

    protected $table = 'rewards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'percent',
        'amount',
        'total',
    ];

    public function minusAmount($id)
    {
        $this->where('id', $id)->update(['amount' => DB::raw('amount  - 1')]);
    }
}
