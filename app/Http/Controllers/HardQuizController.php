<?php

// app/Http/Controllers/HardQuizController.php
// app/Http/Controllers/HardQuizController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score; // Assuming you have a Score model
use Illuminate\Support\Facades\Auth;


class HardQuizController extends Controller
{
    public function saveHardScore(Request $request)
    {

          // Get the authenticated user
          $user = Auth::user();
        // Validate the request
        $request->validate([
            'hardscore' => 'required|integer',
        ]);

        // Save the score to the database
        $score = new Score();
        $score->hardscore = $request->hardscore;
        $score->save();

        // Return a response
        return response()->json(['message' => 'Score saved successfully'], 200);
    }
}
