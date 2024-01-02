<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function AuthRouteAPI(Request $request)
    {
        // Accessing authenticated user information
        $user = $request->user();

        // Example logic - returning user information
        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not authenticated.',
            ], 401);
        }
    }

}
