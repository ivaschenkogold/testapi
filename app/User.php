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
        'name', 'email'
    ];

    public function task_author()
    {
        return $this->belongsTo(Task::class);
    }

    public function project_author()
    {
        return $this->belongsTo(Project::class);
    }

    public function task_participant()
    {
        return $this->belongsToMany(Task::class, 'task_user', 'user_id', 'task_id');
    }

    public function project_participant()
    {
        return $this->belongsToMany(Project::class, 'project_user', 'user_id', 'project_id');
    }
}
