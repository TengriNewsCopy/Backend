<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $result = News::filters($request->all())->paginate($request->input('per_page', 1));

        return response()->json([
            'data' => $result,
            'status' => 'success',
            'message' => 'News retrieved successfully.'
        ]);
    }
}
