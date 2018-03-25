<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
