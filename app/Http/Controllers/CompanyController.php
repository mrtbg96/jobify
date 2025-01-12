<?php

namespace App\Http\Controllers;

use App\Models\Company;

use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $companies = Company::query()
            ->withCount(['user', 'jobs'])
            ->latest()
            ->get();

        return view('companies.index', [
            'companies' => $companies ?? [],
        ]);
    }
}
