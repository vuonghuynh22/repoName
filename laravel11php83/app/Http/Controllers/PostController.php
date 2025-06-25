<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::all();
        return response()->json([
            'success' => true,
            'data' => $posts,
            'message' => 'Posts retrieved successfully'
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published' => 'boolean'
        ]);

        $post = Post::create($validated);

        return response()->json([
            'success' => true,
            'data' => $post,
            'message' => 'Post created successfully'
        ], 201);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $post,
            'message' => 'Post retrieved successfully'
        ]);
    }

    public function update(Request $request, Post $post): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'author' => 'sometimes|string|max:255',
            'published' => 'sometimes|boolean'
        ]);

        $post->update($validated);

        return response()->json([
            'success' => true,
            'data' => $post->fresh(),
            'message' => 'Post updated successfully'
        ]);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json([
            'success' => true,
            'message' => 'Post deleted successfully'
        ]);
    }

    public function published(): JsonResponse
    {
        $posts = Post::where('published', true)->get();
        return response()->json([
            'success' => true,
            'data' => $posts,
            'message' => 'Published posts retrieved successfully'
        ]);
    }
}
