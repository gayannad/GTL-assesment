<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function successResponse($result)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'status' => 200
        ];

        return response()->json($response, 200);
    }

    public function errorResponse($message)
    {
        $response = [
            'success' => false,
            'error' => $message,
            'status' => 422
        ];

        return response()->json($response, 422);
    }
}
