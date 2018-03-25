<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'project_user', 'project_id', 'user_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
