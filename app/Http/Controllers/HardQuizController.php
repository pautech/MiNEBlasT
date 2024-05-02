<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        // Update the authenticated user's hardscore
        $user->hardscore = $request->hardscore;
        $user->save();

        // Return a response
        return response()->json(['message' => 'Score saved successfully'], 200);
    }
}
