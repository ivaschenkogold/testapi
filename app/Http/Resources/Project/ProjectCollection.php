<?php

namespace App\Http\Resources\Project;

use App\Task;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($project){
                return [
                    'author_id' => $project->author_id,
                    'name' => $project->name,
                    'body' => $project->body,
                    'status' => $project->status->name
                ];
            }),
        ];
    }

    public function with($request)
    {
        return [
            'completed_avg_mark' => Task::avg('mark')
        ];
    }
}
