<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    protected $fillable = ['language_name'];

    //テーブルから取得
    public function getNameAttribute()
    {
        return $this->attributes['name'] ?? 'Default Value';
    }

    // codes、rules、shortcuts テーブルへの「一対多」のリレーション
    public function codes()
    {
        return $this->hasMany(Code::class);
    }

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }

    public function shortcuts()
    {
        return $this->hasMany(Shortcut::class);
    }


}
