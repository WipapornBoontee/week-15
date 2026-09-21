<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /api/blogs
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return BlogResource::collection($blogs);
    }

    /**
     * Store a newly created resource in storage.
     * POST /api/blogs
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'boolean',
        ]);

        $blog = Blog::create($fields);

        return (new BlogResource($blog))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     * GET /api/blogs/{id}
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return new BlogResource($blog);
    }

    /**
     * Update the specified resource in storage.
     * PUT/PATCH /api/blogs/{id}
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        $fields = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'status' => 'boolean',
        ]);

        $blog->update($fields);

        return new BlogResource($blog);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/blogs/{id}
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'ลบข้อมูลสำเร็จ',
        ], 200);
    }
}
