<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'status',
        'jobs_id'
    ];

    public function User()
    {
      return  $this->belongsTo(User::class, 'users_id');

    }
    public function Job()
    {
      return  $this->belongsTo(Job::class, 'jobs_id');

    }
}
