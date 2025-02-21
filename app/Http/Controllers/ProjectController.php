<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(Project::all()); // Return API resource
    }

    public function show($id)
    {
        return Project::findOrFail($id);
    }
}

