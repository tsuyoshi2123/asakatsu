<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DateCount extends Model
{
    use HasFactory;

    const CREATED_AT = NULL;
    const UPDATED_AT = NULL;

    /**
     * users テーブルのリレーションの設定
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }
}
