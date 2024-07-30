<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->Paginate(5);
        return view('jobs.index', [
            "Jobs" => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
        request()->validate([
            'Title' => ['required', 'min:3'],
            'Salary' => ['required']
        ]);
        Job::create([
            'Title' => request('Title'),
            'Salary' => request('Salary'),
            'employer_id' => 1
        ]);
    }

    public function edit(Job $job)
    {
        // if(Auth::guest()){
        //     return redirect('/login');
        // }
        // if($job->employer->user->isNot(Auth::user())){
        //     abort(404);
        // }
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        //Authorize (on hold)
        request()->validate([
            'Title' => ['required', 'min:3'],
            'Salary' => ['required']
        ]);

        $job->update([
            'Title' => request('Title'),
            'Salary' => request('Salary')
        ]);

        return redirect("job/{$job->id}");
    }
    public function destroy(Job $job)
    {
        //Authorize (on hold)
        $job->delete();
        return redirect('/job');
    }
}
