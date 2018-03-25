<?php

namespace App\Http\Resources\Task;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'author_id' => $this->author_id,
            'project_id' => $this->project_id,
            'name' => $this->name,
            'description' => $this->description,
            'mark' => $this->mark,
            'status' => $this->status->name
        ];
    }
}
