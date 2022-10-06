<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Login extends Model
{
    use HasFactory;

    const CREATED_AT = NULL;
    const UPDATED_AT = NULL;

    protected $fillable = ['user_id', 'login_date'];

    /**
     * usersテーブルのリレーションの設定
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
