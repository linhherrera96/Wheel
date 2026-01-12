<?php

namespace App\Http\Controllers\Api;

use App\Constants\UserConst;
use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\RewardHistory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends BaseController
{
    public function __construct(
        Reward $reward,
        RewardHistory $rewardHistory
    )
    {
        $this->reward = $reward;
        $this->rewardHistory = $rewardHistory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *     @OA\Post(
     *     path="/api/rewards/random",
     *     summary="Random rewards",
     *     tags={"User"},
     *     security={ {"bearer": {}} },
     *       @OA\RequestBody(
     *        @OA\JsonContent(
     *             type="object",
     *                        required={"customer_id"},
     *                        @OA\Property(
     *                             property="customer_id",
     *                             example="KH01",
     *                             type="string",
     *                         ),
     *         )
     *     ),
     *     @OA\Response(
     *        response="200",
     *        description="Successful",
     *     ),
     *     @OA\Response(
     *        response="400",
     *        description="Bad Request",
     *     ),
     *    @OA\Response(
     *        response="500",
     *        description="Internal Server Error",
     *     ),
     * )
     *
     */
    public function generateRewards(Request $request)
    {
        try {
            $user = Auth::guard(UserConst::USER_GUARD)->user();
            
            if (!isset($request->customer_id) || !$request->customer_id ) return $this->sendError(__('app.customer_not_exist'), Response::HTTP_FORBIDDEN, 401);

            if (!$user) return $this->sendError(__('app.not_have_permission'), Response::HTTP_FORBIDDEN, 401);
    
            $rewards = $this->reward->all();
    
            $prize_arr = [];
            
            $count_reward = $this->reward->where('id', '<=', 5)->sum('amount');

            if ($count_reward <= 0) return $this->sendError('Đã hết lượt quay!');

            foreach ($rewards as $reward) {
                if ($reward['amount'] >= 1 && $reward['id'] < 8) {
                    $prize = [  
                        'id' => $reward['id'],
                        'prize' => $reward['name'],
                        'min' => $reward['min'],
                        'max' => $reward['max'],
                        'v' => $reward['percent'],
                    ];
                    $prize_arr[$reward['id']] = $prize;
                }
            }

            $countRewardByCustomer = $this->rewardHistory->getCountByCustomer($request->customer_id);

            if ($request->customer_id == UserConst::USER_REWARD &&   $countRewardByCustomer<= UserConst::MAX_TURN_REWARD) {
                foreach ($prize_arr as $val) { 
                    $arr[$val['id']] = $val['v']; 
                }

                if ($countRewardByCustomer + 1 == 3) {
                    $rid = 6;
                } else if ($countRewardByCustomer + 1 == 6) {
                    $rid = 7;
                } else {
                    $rid = $this->getRand($arr);
                }
            } else {
                foreach ($prize_arr as $val) { 
                    $arr[$val['id']] = $val['v']; 
                } 
                    
                $rid = $this->getRand($arr);
            }
            
            $res = $prize_arr[$rid];  

            $this->reward->minusAmount($res['id']);
    
            $this->rewardHistory->create([
                'user_id' => $user->id,
                'reward_id' => $res['id'],
                'customer_id' => $request->customer_id,
            ]);
    
            $result['id'] =  $res['id'];
            $result['prize'] = $res['prize'];
            $result['range'] = random_int($res['min'] + 5, $res['max'] - 5);

            return $this->sendSuccessResponse($result);
        } catch (Exception $e) {
            $this->log("generateRewards", null, null, $e->getMessage());
            return $this->sendError(__('app.system_error'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getRand($proArr) { 
        $result = null;
        $proSum = array_sum($proArr);
        do {
            foreach ($proArr as $key => $proCur) {

                $randNum = $this->rand_float(0, $proSum);

                if ($randNum <= $proCur) { 
                    $result = (int) $key;
                } else { 
                    $proSum -= $proCur; 
                }

                $reward = $this->reward->find($result);
                if ( $reward && $reward->amount >= 1 ) break;
            }
        } while(!$reward ||  $reward->amount <= 0 );

        unset($proArr); 
     
        return $result; 
    }

    public function rand_float($st_num = 0, $end_num = 1, $mul = 100)
    {
        if ($st_num > $end_num) return null;
        return mt_rand($st_num*$mul, $end_num*$mul)/$mul;
    }
}
