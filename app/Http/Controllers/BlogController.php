<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('id')
            ->where(function($query) {
                $query->where('status', '1')
                      ->orWhere('status', 1)
                      ->orWhere('status', 'true')
                      ->orWhere('status', true);
            })
            ->get();
        return view('welcome', compact('blogs'));
    }

    public function detail($id)
    {
        $blog = Blog::find($id);
        return view('detail', compact('blog'));
    }
}

