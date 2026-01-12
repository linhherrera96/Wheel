<?php

namespace App\Constants;

class UserConst
{
    const ACTIVATION_REGISTER_PATH = 'signup/create/';
    const DEFAULT_PASSWORD = 'password_1234';
    const TIME_ACTIVATE = 1 ;// hour
    const USER_GUARD = 'users';
    const ADMIN_GUARD = 'admins';
    const RESET_PASSWORD_PATH = '/password/reset/';
    const RESET_MAIL_PATH = '/mail/reset/';
    const TIME_EXPIRE_OTP = 5;//minute
    const LOGIN_FAILED_LIMIT = 5;
    const LOGIN_BLOCK_TIME = 10; // minute
    
    // account status
    const USING = 1;
    const REGISTER = 2;
    const UNUSED = 3;
    const UNSUBSCRIBED = 4;
    const BLOCKED = 1;
    const USER_REWARD = 'Nhungdn0001';
    const MAX_TURN_REWARD = 12;

}
