<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userStudent extends Model
{
    use HasFactory;
    
    protected $table = 'user_student';
    public $timestamps = false;
    protected $fillable = ['name'];
}
