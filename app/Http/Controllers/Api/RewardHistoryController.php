<?php

namespace App\Http\Controllers\Api;

use App\Constants\UserConst;
use App\Models\RewardHistory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RewardHistoryController extends BaseController
{
    protected $rewardHistory;

    public function __construct(RewardHistory $rewardHistory)
    {
        $this->rewardHistory = $rewardHistory;
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *     @OA\Get(
     *     path="/api/admin/reward-histories/list",
     *     summary="Random rewards",
     *     tags={"Admin"},
     *     security={ {"bearer": {}} },
     *     @OA\Parameter(
     *         description="Per Page",
     *         in="query",
     *         name="per_page",
     *         example="10",
     *         @OA\Schema(
     *         type="integer"
     *        )
     *     ),
     *     @OA\Parameter(
     *         description="Page",
     *         in="query",
     *         name="page",
     *         example="1",
     *         @OA\Schema(
     *         type="integer"
     *        )
     *     ),
     *     @OA\Parameter(
     *         description="Customer ID",
     *         in="query",
     *         name="customer_id",
     *         example="KH01",
     *         @OA\Schema(
     *         type="string"
     *        )
     *     ),
     *     @OA\Parameter(
     *         description="User Name",
     *         in="query",
     *         name="user_name",
     *         example="Lê Thành Chung",
     *         @OA\Schema(
     *         type="string"
     *        )
     *     ),
     *     @OA\Parameter(
     *         description="Distributor",
     *         in="query",
     *         name="distributor",
     *         example="PHUONGQN",
     *         @OA\Schema(
     *         type="string"
     *        )
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
    public function getAllRewardHistory(Request $request)
    {
        try {

            $user = Auth::guard(UserConst::ADMIN_GUARD)->user();

            if (!$user) return $this->sendError(__('app.not_have_permission'), Response::HTTP_FORBIDDEN, 401);

            return $this->sendSuccessResponse($this->rewardHistory->getAll($request));
        } catch (Exception $e) {
            $this->log("getAllRewardHistory", null, null, $e->getMessage());
            return $this->sendError(__('app.system_error'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
