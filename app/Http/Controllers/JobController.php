<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs/index', [
            'headline' => "Jobs",
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs/create');
    }

    public function show(Job $job)
    {
        return view('jobs/show', ['job' => $job]);

    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric', 'min:1'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1 //TODO:
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs/edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric', 'min:1'],
        ]);

        $job->update([
            'salary' => request('salary') ,
            'title' => request('title')
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
