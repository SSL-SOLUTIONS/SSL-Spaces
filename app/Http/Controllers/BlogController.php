<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $blog->image = $imagePath;
        }

        $blog->save();

        return redirect()->route('dashboard_blogs.index')->with('success', 'Blog added successfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }

            // Upload new image
            $imagePath = $request->file('image')->store('uploads', 'public');
            $blog->image = $imagePath;
        }

        $blog->save();

        return redirect()->route('dashboard_blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete associated image
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('dashboard_blogs.index')->with('success', 'Blog deleted successfully');
    }
}
