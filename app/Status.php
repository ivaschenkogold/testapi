<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'id', 'task_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'id', 'project_id');
    }
}
