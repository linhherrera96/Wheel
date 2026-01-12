<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as AuthenticationTable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User  extends AuthenticationTable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'dist_id',
        'first_last_name',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * ID発行
     */
    private static function generateId()
    {
        // 9桁のランダムな数字（0始まり禁止）
        $random = strval(mt_rand(100000000, 999999999));

        while (!is_null(User::find($random))) {
            $random = strval(mt_rand(100000000, 999999999));
        }

        return $random;
    }

    public function createAccount()
    {
        // 新規登録時、IDを自動採番
        if (!isset($this->id)) {
            $this->id = self::generateId();
        }
        return $this->save();
    }


    /**
     * モデルのイベント時起動処理
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // 保存イベント
        static::saving(function ($user) {
            // パスワードをハッシュ化
            if (isset($user->password)) {
                $user->password = Hash::make($user->password);
            }
        });

        // 削除イベント
        static::deleting(function ($manager) {
            // マスク処理
            self::maskProcess();
        });
    }

    public function updatePasswordByAccountId($id, $password)
    {
        $result = $this->where('id', $id)
            ->update(['password' => Hash::make($password)]);
        return $result;
    }
    

    public function getInfoByName($name)
    {
        return $this->where('name', $name)->first();
    }

    public function distributor()
    {
        return $this->hasOne(Distributor::class, 'id', 'dist_id');
    }
}
