<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    // frameworks テーブルへの「多対一」のリレーション
    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }
}
