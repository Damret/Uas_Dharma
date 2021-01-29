<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class season extends Model
{
    protected $table = 'season';
    protected $fillable = ['musim','deskripsi'];
}
