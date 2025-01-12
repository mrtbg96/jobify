<?php

namespace App\Http\Controllers;

use App\Models\Job;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'search' => ['required', 'string']
        ]);

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('location', 'LIKE', '%' . $request->search . '%')
            ->orWhere('schedule', 'LIKE', '%' . $request->search . '%')
            ->latest()
            ->get();

        return view('result', [
            'jobs' => $jobs
        ]);
    }
}
