<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
<<<<<<< HEAD
        'subject'
=======
        'subject',
>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
    ];
}