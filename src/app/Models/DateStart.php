<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DateStart extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;
    const DELETED_AT = NULL;
    const CREATED_AT = NULL;

    /**
     * date_counts テーブルのリレーションの設定
     * @return HasOne
     */
    public function DateCount(): HasOne
    {
        return $this->hasOne(DateCount::class);
    }

    /**
     * date_counts テーブルのリレーションの設定
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
