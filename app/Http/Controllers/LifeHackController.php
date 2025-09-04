<?php

namespace App\Http\Controllers;

use App\Models\LifeHack;
use Illuminate\Http\Request;

class LifeHackController extends Controller
{
    // Get all hacks
    public function getAll()
    {
        return response()->json(LifeHack::all());
    }

    // Get random hack
    public function getRandom()
    {
        return response()->json(LifeHack::inRandomOrder()->first());
    }

    // Get hack by ID
    public function getById($id)
    {
        $hack = LifeHack::find($id);

        if (!$hack) {
            return response()->json(["message" => "No hack found for id: $id"], 404);
        }

        return response()->json($hack);
    }

    // Create new hack (POST)
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'tip' => 'required|string',
        ]);

        $hack = LifeHack::create($request->only(['category', 'tip']));

        return response()->json($hack, 201);
    }

    // Delete hack by ID (DELETE)
    public function destroy($id)
    {
        $hack = LifeHack::find($id);

        if (!$hack) {
            return response()->json(["message" => "No hack found for id: $id"], 404);
        }

        $hack->delete();

        return response()->json(["message" => "Hack with id $id deleted successfully"]);
    }
}
