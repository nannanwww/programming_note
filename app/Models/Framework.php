<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Framework extends Model
{
    use HasFactory;
    protected $table = 'frameworks';
    protected $fillable = ['framework_name'];

    //テーブルから取得
    public function getNameAttribute($value)
    {
        return $this->attributes['name'] ?? 'Default Value';
    }

    // processes、commandsテーブルへの「一対多」のリレーション
    public function processes()
    {
        return $this->hasMany(Process::class);
    }

    public function commands()
    {
        return $this->hasMany(Command::class);
    }

}
