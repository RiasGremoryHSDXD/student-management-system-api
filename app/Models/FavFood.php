<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavFood extends Model
{
    use HasFactory;

    protected $table = 'fav_food';
    public $timestamps = false;
    protected $fillable = ['name'];
}
