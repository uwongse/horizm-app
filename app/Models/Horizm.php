<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horizm extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUsers',
        'nameUsers',
        'title',
        'description',
        'userRating',
        'idPost',
        'postRating'
    ];
}
