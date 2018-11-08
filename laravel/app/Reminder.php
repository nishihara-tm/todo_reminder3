<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
  public function task_user(){
    return $this->belongsTo('App\TaskUser');
  }  
}
