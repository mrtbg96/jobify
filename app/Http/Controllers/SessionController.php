<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records.'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route('jobs.index');
    }
}
