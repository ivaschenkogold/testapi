<?php

namespace App\Http\Controllers;

use App\Traits\RequestTrait;
use Illuminate\Http\Request;
use App\Http\Resources\Project\ProjectCollection;
use App\Http\Resources\Project\ProjectResource;
use App\Project;
use Illuminate\Support\Facades\Validator;
use App\Status;

class ProjectController extends Controller
{
    use RequestTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request = $this->makeRequestArray($request);

        $validator = $this->indexValidation($request);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $projects = Project::when(isset($request['name']), function ($query) use ($request) {
            $query->where('name', $request['name']);

        })->when(isset($request['description']), function ($query) use ($request) {
            $query->where('description', 'like', '%' . $request['description'] . '%');

        })->when(isset($request['status']), function ($query) use ($request) {
            $query->whereHas('status', function ($query) use ($request) {
                if (is_array($request['status'])) {
                    $query->whereIn('name', $request['status']);
                }else{
                    $query->where('name', $request['status']);
                }
            });

        })->when(isset($request['author_name']), function ($query) use ($request) {
            $query->whereHas('author', function ($query) use ($request) {
                $query->where('name', $request['author_name']);
            });

        })->when(isset($request['author_surname']), function ($query) use ($request) {
            $query->whereHas('author', function ($query) use ($request) {
                $query->where('surname', $request['author_surname']);
            });

        })->when(isset($request['participant_name']), function ($query) use ($request) {
            $query->whereHas('participants', function ($query) use ($request) {
                if (is_array($request['participant_name'])) {
                    $query->whereIn('name', $request['participant_name']);
                }else{
                    $query->where('name', $request['participant_name']);
                }
            });

        })->when(isset($request['participant_surname']), function ($query) use ($request) {
            $query->whereHas('participants', function ($query) use ($request) {
                if(is_array($request['participant_surname'])){
                    $query->whereIn('surname', $request['participant_surname']);
                }else{
                    $query->where('surname', $request['participant_surname']);
                }
            });

        })->when(isset($request['participant_id']), function ($query) use ($request) {
            $query->whereHas('participants', function ($query) use ($request) {
                if(is_array($request['participant_id'])){
                    return $query->whereIn('project_user.id', $request['participant_id']);
                }else{
                    return $query->where('project_user.id', $request['participant_id']);
                }
            });

        })->when(isset($request['mark']), function ($query) use ($request) {
            $query->has('tasks')->whereDoesntHave('tasks', function ($query) use ($request) {
                $query->where('mark', '<=', $request['mark']);
            });
        });

        return new ProjectCollection($projects->paginate(5));
    }

    //Index input data validation
    public function indexValidation($data)
    {
        $validating_array = [
            'name' => 'string|max:255',
            'description' => 'string|max:255',
            'author_name' => 'string|max:255',
            'author_surname' => 'string|max:255',
            'mark' => 'integer|min:1|max:5'
        ];

        if (isset($data['status']) && is_array($data['status'])) {
            $validating_array['status.*'] = 'string|max:255|exists:statuses,name';
        }else{
            $validating_array['status'] = 'string|max:255|exists:statuses,name';
        }

        if (isset($data['participant_name']) && is_array($data['participant_name'])) {
            $validating_array['participant_name.*'] = 'string|max:255';
        }else{
            $validating_array['participant_name'] = 'string|max:255';
        }

        if (isset($data['participant_surname']) && is_array($data['participant_surname'])) {
            $validating_array['participant_surname.*'] = 'string|max:255';
        }else{
            $validating_array['participant_surname'] = 'string|max:255';
        }

        if (isset($data['participant_id']) && is_array($data['participant_id'])) {
            $validating_array['participant_id.*'] = 'integer';
        }else{
            $validating_array['participant_id'] = 'integer';
        }

        return Validator::make($data, $validating_array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project, Status $status)
    {
        $validator = $this->storeValidation($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $project->author_id = $request->author_id;
        $project->name = $request->name;
        $project->body = $request->body;
        $project->status_id = $status->where('name', $request->status)->select('id')->first()->id;
        $project->save();

        return new ProjectResource($project);
    }

    //Create project validation
    public function storeValidation($data)
    {
        return Validator::make($data, [
            'author_id' => 'required|integer|exists:users,id',
            'name' => 'required|string|max:255',
            'body' => 'nullable|string',
            'status' => 'required|exists:statuses,name',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['data' => '']);
        }
        return new ProjectResource($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
