<?php

namespace App\Http\Controllers;

use App\Models\Player;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return response()->json($players);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);

        $player = Player::create($validatedData);

        return response()->json($player, 201);
    }
}
