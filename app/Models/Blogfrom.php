<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogfrom extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'discription',
        'cover_img',
    ];
}
