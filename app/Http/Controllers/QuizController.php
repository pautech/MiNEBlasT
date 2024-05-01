<?php

// QuizController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User; // Import the User model

class QuizController extends Controller
{
    public function saveMediumScore(Request $request)
    {
        // Validate the request
        $request->validate([
            'totalScore' => 'required|integer', // Assuming medscore is an integer
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the mediumscore in the users table
        $user->mediumscore = $request->totalScore;
        $user->save(); // Save the changes to the database

        // Return a response
        return response()->json(['message' => 'Medium score saved successfully'], 200);
    }
}
