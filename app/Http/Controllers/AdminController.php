<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function blog(Request $request)
    {
        $search = $request->input('search');
        
        $query = Blog::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $blogs = $query->paginate(5)->withQueryString();
        
        return view('blogs', compact('blogs', 'search'));
    }

    public function create()
    {
        return view('form_add_blogs');
    }

    public function insert(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:50',
                'content' => 'required',
            ],
            [
                'title.required' => 'กรุณาใส่ชื่อบทความ',
                'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
                'content.required' => 'กรุณาใส่เนื้อหา',
            ]
        );

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status ?? 1,
        ];

        Blog::insert($data);

        return redirect('/author/blog')->with('success', 'บันทึกบทความสำเร็จแล้ว!');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('form_edit_blogs', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|max:50',
                'content' => 'required',
            ],
            [
                'title.required' => 'กรุณาใส่ชื่อบทความ',
                'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
                'content.required' => 'กรุณาใส่เนื้อหา',
            ]
        );

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status ?? 1,
        ];

        Blog::find($id)->update($data);

        return redirect('/author/blog')->with('success', 'อัปเดตบทความสำเร็จแล้ว!');
    }

    public function change($id)
    {
        $blog = Blog::find($id);
        $data = [
            'status' => !$blog->status
        ];
        Blog::find($id)->update($data);

        return redirect()->back();
    }

    public function delete($id)
    {
        Blog::find($id)->delete();
        return redirect()->back();
    }

    public function view($id)
    {
        $blog = Blog::findOrFail($id);
        return view('form_view_blogs', compact('blog'));
    }
}
