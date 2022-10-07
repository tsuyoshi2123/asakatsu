<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DateStart extends Model
{
    use HasFactory;

    /**
     * date_counts テーブルのリレーションの設定
     * @return HasOne
     */
    public function DateCount(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
