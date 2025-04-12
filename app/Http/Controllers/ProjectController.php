<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // public function index()
    // {
    //     $projects = Project::all();
    //     return view('projects.index', compact('projects'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show($id)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('projects.show', compact('project'));
    // }
    

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

    public function bossProjects(User $user) {
        $projects = $user->projects;
        return view('boss.projects', compact('user', 'projects'));
    }

    public function index() {
        $projects = Project::where('status', 'open')->get();
        return view('freelancer.projects', compact('projects'));
    }
}
