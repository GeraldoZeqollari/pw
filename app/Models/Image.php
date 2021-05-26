<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'path_name',
        'image_title',
        'year',
        'resolution',
        'stock',
        'price',
        'image_description',
        'author',
        'category_id',

    ];
}
