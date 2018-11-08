<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //アサインしたタスクの一覧
    public function assigning_tasks(){
      return $this->belongsToMany('App\Task','task_user','assigning_user_id','task_id');
    }
    
    //アサインしたタスクのリマインダの一覧
    public function assigning_reminders(){
      return $this->hasManyThrough('App\Reminder','App\TaskUser','assigning_user_id','task_user_id','id','id');
    }

    //アサインされたタスクの一覧
    public function assigned_tasks(){
      return $this->belongsToMany('App\Task','task_user','assigned_user_id','task_id');
    }

    //アサインされたリマインダの一覧
    public function assigned_reminders(){
      return $this->hasManyThrough('App\Reminder','App\TaskUser','assigned_user_id','task_user_id','id','id');
    }

}
