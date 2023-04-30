<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = ['is_admin']; // свойство для указания, столбцов, заполнять которые НЕЛЬЗЯ
    //protected $fillable = []; // свойство для указания, столбцов, которые заполнять МОЖНО
}
