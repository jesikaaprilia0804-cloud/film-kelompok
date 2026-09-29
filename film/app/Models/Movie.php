<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HAsfactory;

   protected $fillable =[
        'judul',
        'genre',
        'tahun',
        'detail',
    ];  
}
