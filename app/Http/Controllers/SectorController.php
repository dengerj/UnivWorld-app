<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        return view('dashboard', compact('sectors'));
    }

    public function store(Request $request)
    {
        Sector::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Sector created successfully.');
    }

    public function show($id)
    {
        $sector = Sector::findOrFail($id);
        return view('sectors.show', compact('sector'));
    }

    public function update(Request $request, $id)
    {
        $sector = Sector::findOrFail($id);
        $sector->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Sector updated successfully.');
    }

    public function destroy($id)
    {
        $sector = Sector::findOrFail($id);
        $sector->delete();
        return redirect()->route('dashboard')->with('success', 'Sector deleted successfully.');
    }

}
