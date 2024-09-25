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


    protected $table = 'userSkills';

    public function Skill(){
        return $this->belongsTo(skills::class, 'skill_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');

    }
}
