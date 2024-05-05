<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortcut extends Model
{
    use HasFactory;
    // languages テーブルへの「多対一」のリレーション
    public function languages()
    {
        return $this->hasMany(Language::class);
    }
}
