<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        return response()->json($sectors);
    }

    public function store(Request $request)
    {
        $sector = Sector::create($request->all());
        return response()->json($sector, 201);
    }

    public function show($id)
    {
        $sector = Sector::findOrFail($id);
        return response()->json($sector);
    }

    public function update(Request $request, $id)
    {
        $sector = Sector::findOrFail($id);
        $sector->update($request->all());
        return response()->json($sector, 200);
    }

    public function destroy($id)
    {
        Sector::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
