<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'skill_id',
        'users_id',
        'status'
    ];
}
