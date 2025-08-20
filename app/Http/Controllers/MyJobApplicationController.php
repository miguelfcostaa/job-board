<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class MyJobApplicationController extends Controller
{
    public function index()
    {
        return view(
            'my_job_applications.index',
            ['applications' => auth()->user()->jobApplications()
                ->with([
                    'job' => fn($query) => $query->withCount('jobApplications')
                        ->withAvg('jobApplications', 'expected_salary')
                        ->withTrashed(), 
                    'job.employer'
                ])
                ->latest()->get()
            ]
        );
    }

    public function destroy(JobApplication $myJobApplication)
    {
        $myJobApplication->delete();

        return redirect()->route('jobs.index')->with(
            'success',
            'Job Application withdrawn!'
        );
    }
}
