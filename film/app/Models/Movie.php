<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
   protected $fillable =[
        'judul',
        'genre',
        'tahun_rilis',
        'sinopsis'
    ];  
}
