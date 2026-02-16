<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newproject = new Project();
        $newproject->title = $data["title"];
        $newproject->author = $data["author"];
        $newproject->type_id = $data["type_id"];
        $newproject->content = $data["content"];
        $newproject->save();
        if ($request->has("techonologies")) {
            $newproject->technologies()->attach($data['technologies']);
        }



        return redirect()->route("project.show", $newproject);
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.edit", compact("project", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->title = $data["title"];
        $project->author = $data["author"];
        $project->type_id = $data["type_id"];
        $project->content = $data["content"];
        $project->update();
        if ($request->has("techonologies")) {
            $project->technologies()->sync($data["technologies"]);

        } else {
            $project->technologies()->detach();
        }
        return redirect()->route("project.show", $project);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->technologies()->detach();
        $project->delete();
        return redirect()->route("project.index");
    }
}
