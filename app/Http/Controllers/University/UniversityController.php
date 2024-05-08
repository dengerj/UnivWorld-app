<?php

namespace App\Http\Controllers\University;

use App\http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\University;


class UniversityController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('universisty.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    
    }


    public function index()
    {
        $universities = University::all();
        return view('dashboard', ['universities' => $universities]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'sector_id' => 'required|in:1,2,3,4', // Valider la valeur du secteur_id
        ]);

        University::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'sector_id' => $request->input('sector_id'), // Utiliser la valeur du secteur_id fournie dans le formulaire
        ]);

        return redirect()->route('dashboard')->with('success', 'University created successfully.');
    }


    public function show($id)
    {
        $university = University::findOrFail($id);
        return view('university.show', compact('university'));
    }

    public function getBySectorId($sector_id)
    {
        $universities = University::where('sector_id', $sector_id)->get();
        return view('dashboard', compact('universities'));
    }





}
