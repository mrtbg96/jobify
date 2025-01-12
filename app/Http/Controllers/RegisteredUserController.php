<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $userAttributes = $request->validate([
            'name' => [
                'required',
                'string',
                'min:2',
                'max:64'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'min:3',
                'max:64',
                'unique:users'
            ],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->letters()
                    ->numbers(),
                'confirmed',
            ],
        ]);

        $employerAttributes = $request->validate([
            'employer' => [
                'required',
                'string',
                'min:2',
                'max:64'
            ],
            'logo' => [
                'required',
                File::types(['png', 'jpg', 'jpeg'])
                    ->max(2048)
            ],
        ]);

        $user =  User::create($userAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        return redirect()->route('jobs.index');
    }
}
