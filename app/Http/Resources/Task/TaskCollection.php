<?php

namespace App\Http\Resources\Task;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($task){
                return [
                    'author_id' => $task->author_id,
                    'project_id' => $task->project_id,
                    'name' => $task->name,
                    'description' => $task->description,
                    'mark' => $task->mark,
                    'status' => $task->status->name
                ];
            }),
        ];
    }
}
