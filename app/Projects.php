<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
   protected $fillable = [
        'p_name','p_status','p_image','p_start_date','p_end_date','p_assigned','p_description','updated_at'
    ];


    public function users()
    {
       return $this->hasOne('App\User', 'id', 'p_assigned');

    }
}
