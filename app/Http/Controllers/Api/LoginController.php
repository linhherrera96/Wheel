<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Constants\UserConst;
use App\Models\User;
use Carbon\Carbon;

class LoginController extends BaseController
{
    protected $account;
    protected $office;

    public function __construct(
        User $user
    )
    {
        $this->user = $user;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:256',
            'password' => 'required|string|max:30',
        ];
    }


    /**
     *     @OA\Post(
     *     path="/api/login",
     *     summary="Account login",
     *     tags={"User"},
     *      @OA\RequestBody(
     *        @OA\JsonContent(
     *             type="object",
     *                        required={"name","password"},
     *                        @OA\Property(
     *                             property="name",
     *                             example="npp1@gmail.com",
     *                             type="string",
     *                         ),
     *                         @OA\Property(
     *                             property="password",
     *                             example="12345678",
     *                             type="string",
     *                         ),
     *         )
     *     ),
     *     @OA\Response(
     *        response="200",
     *        description="Manager login successful",
     *     ),
     *     @OA\Response(
     *        response="400",
     *        description="Bad Request",
     *     ),
     *  *     @OA\Response(
     *        response="500",
     *        description="Internal Server Error",
     *     ),
     * )
     *
     */
    public function login(Request $request)
    {
        $request->request->add(['role' => UserConst::USER_GUARD]);

        $credentials = $request->only('name', 'password', 'role');

        //valid credential
        $validator = Validator::make($credentials, $this->rules());
        $errors = $validator->errors();
        //Request is validated
        if ($errors->first()) return $this->sendError($errors->first());

        $user = $this->user->getInfoByName($request->name);

        if (!isset($user)) {
            return $this->sendError(__('app.account_not_exist'));
        }

        if (!auth()->attempt($credentials)) {
            return $this->sendError(__('app.login_failed'));
        }

        $user = auth()->user();
        
        //Create token
        try {
            if (!$token = auth(UserConst::USER_GUARD)->setTTL(43200)->attempt($credentials)) {
                return $this->sendError(__('app.login_failed'));
            }
        } catch (JWTException $e) {
            return $this->sendError(__('app.create_token_failed'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        //Token created, return with success response and jwt token\
        $results = $this->convertDataToken($token, $user['id'], UserConst::USER_GUARD , UserConst::USER_GUARD);
        
        return $this->sendSuccessResponse($results);
    }


    /**
     *     @OA\Post(
     *     path="/api/admin/login",
     *     summary="Account login",
     *     tags={"Admin"},
     *      @OA\RequestBody(
     *        @OA\JsonContent(
     *             type="object",
     *                        required={"name","password"},
     *                        @OA\Property(
     *                             property="name",
     *                             example="ADMIN",
     *                             type="string",
     *                         ),
     *                         @OA\Property(
     *                             property="password",
     *                             example="12345678",
     *                             type="string",
     *                         ),
     *         )
     *     ),
     *     @OA\Response(
     *        response="200",
     *        description="Manager login successful",
     *     ),
     *     @OA\Response(
     *        response="400",
     *        description="Bad Request",
     *     ),
     *  *     @OA\Response(
     *        response="500",
     *        description="Internal Server Error",
     *     ),
     * )
     *
     */
    public function loginAdmin(Request $request)
    {
        $request->request->add(['role' => UserConst::ADMIN_GUARD]);

        $credentials = $request->only('name', 'password', 'role');

        //valid credential
        $validator = Validator::make($credentials, $this->rules());
        $errors = $validator->errors();
        //Request is validated
        if ($errors->first()) return $this->sendError($errors->first());

        $user = $this->user->getInfoByName($request->name);

        if (!isset($user)) {
            return $this->sendError(__('app.account_not_exist'));
        }

        if (!auth()->attempt($credentials)) {
            return $this->sendError(__('app.login_failed'));
        }

        $user = auth()->user();
        
        //Create token
        try {
            if (!$token = auth(UserConst::ADMIN_GUARD)->setTTL(43200)->attempt($credentials)) {
                return $this->sendError(__('app.login_failed'));
            }
        } catch (JWTException $e) {
            return $this->sendError(__('app.create_token_failed'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        //Token created, return with success response and jwt token\
        $results = $this->convertDataToken($token, $user['id'], UserConst::ADMIN_GUARD , UserConst::ADMIN_GUARD);
        
        return $this->sendSuccessResponse($results);
    }
}
