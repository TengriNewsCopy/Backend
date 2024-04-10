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

    public function show(int $id): JsonResponse
    {
        $result = News::find($id);

        return response()->json([
            'data' => $result,
            'status' => 'success',
            'message' => 'News retrieved successfully.'
        ]);
    }

    public function tags(): JsonResponse
    {
        $news = News::all();
        $result = [];

        foreach ($news as $item) {
            $tags = $item->tags;
            $result = array_merge($result, $tags);
        }

        return response()->json([
            'data' => $result,
            'status' => 'success',
            'message' => 'Tags retrieved successfully.'
        ]);
    }
}
