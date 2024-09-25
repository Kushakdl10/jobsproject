<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
        'skill_id',
        'status'
    ];
    protected $table = 'jobSkills';


    public function Jobs()
    {
        return $this->belongsTo('App\Models\Job', 'job_id');

    }

     public function Skills()
     {
         return $this->belongsTo('App\Models\Skills', 'skill_id');

     }
}
