<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class HardQuizController extends Controller
{
    //

    public function savehardScore(Request $request)
    {
        // Validate the request
        $request->validate([
            'score' => 'required|integer', // Assuming medscore is an integer
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the mediumscore in the users table
        $user->hardscore = $request->score;
        $user->save(); // Save the changes to the database

        // Return a response
        return response()->json(['message' => 'Hard score saved successfully'], 200);
    }
}
