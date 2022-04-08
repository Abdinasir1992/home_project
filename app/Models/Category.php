<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $fillable = ['name'];
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class); // описано отношение с модель-классом User для поиска Юзера через номер телефона
    }
}
