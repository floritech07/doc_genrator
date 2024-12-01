<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    /**
     * Example endpoint to return a JSON response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function example()
    {
        return response()->json(['message' => 'This is a simple commit test']);
    }
}
