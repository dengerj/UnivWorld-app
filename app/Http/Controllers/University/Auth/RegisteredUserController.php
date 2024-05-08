<?php

namespace App\Http\Controllers\University\Auth;

use App\Http\Controllers\Controller;
use App\Models\university;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('university.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.University::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'sector_id' => 'required|in:1,2,3,4', // Valider la valeur du secteur_id
        ]);

        $university = University::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sector_id' => $request->input('sector_id'), // Utiliser la valeur du secteur_id fournie dans le formulaire
        ]);

        event(new Registered($university));

        Auth::guard('university')->login($university);

        return redirect(route('university.dashboard', absolute: false));
    }
}
