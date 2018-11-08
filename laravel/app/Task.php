<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function assigned_users(){
      return $this->belongsToMany('App\User','task_user','task_id','assigned_user_id');
    }
    public function assigning_users(){
      return $this->belongsToMany('App\User','task_user','task_id','assigning_user_id');
    }
}
