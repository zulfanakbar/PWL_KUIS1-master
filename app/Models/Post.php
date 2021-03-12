<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    //---------------JS03 - Praktikum 2----------------
    protected $table = ‘my_posts’;
    protected $primaryKey = ‘my_id’;
    protected $keyType = ‘string’;
    public $incrementing = false;
}
