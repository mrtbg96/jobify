<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;

use Illuminate\View\View;

use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $featuredJobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('featured', true)
            ->latest()
            ->get();

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->latest()
            ->get();

        return view('jobs.index', [
            'featuredJobs' => $featuredJobs ?? [],
            'jobs' => $jobs ?? [],
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request): RedirectResponse
    {
        $attributes = $request->validate([
            'title' => [
                'required',
                'string',
                'min:4',
                'max:64',
                'unique:jobs'
            ],
            'salary' => [
                'required',
                'string'
            ],
            'location' => [
                'required',
                'string'
            ],
            'schedule' => [
                'required',
                'in:Full-time,Part-time'
            ],
            'url' => [
                'required',
                'url'
            ],
            'tags' => [
                'required',
                'string'
            ],
        ]);


        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        foreach (explode(',', $attributes['tags']) as $tag) {
            $job->tag(strtolower(trim($tag)));
        }

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
