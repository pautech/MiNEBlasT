<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function save(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Handle saving the score here
        $totalScore = $request->input('totalScore');

        // Update the easyscore column for the authenticated user
        $user->easyscore = $totalScore;
        $user->save();

        return response()->json(['message' => 'Score saved successfully'], 200);
    }
}