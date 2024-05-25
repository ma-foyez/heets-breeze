<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// namespace Intervention\Image\Facades;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        // dd($blogs);
        return view('admin.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048', // max file size of 2MB
        ]);
        // dd($validatedData);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());
        $img->fit(420, 370); // resize the image to fit within 380x310 while preserving aspect ratio
        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/blogs/') . $imageName);

        $blog = new Blog();
        $blog->title = $validatedData['title'];
        $blog->subtitle = $validatedData['subtitle'];
        $blog->description = $validatedData['description'];
        $blog->image = $imageName;

        if ($blog->save()) {
            return redirect()
                ->route('blogs.index')
                ->with('success', 'Blog created successfully.');
            # code...
        } else {
            return back()->with('error', 'Blog creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.pages.blog.view', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.pages.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(420, 370);  // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/blogs/') . $imageName);

            $blog->image = $imageName;
        }

        $blog->title = $validatedData['title'];
        $blog->subtitle = $validatedData['subtitle'];
        $blog->description = $validatedData['description'];
        $blog->save();

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // delete the blog's image file, if it exists

        if ($blog->image && file_exists(asset('uploads/blogs/' . $blog->image))) {
            unlink(asset('uploads/blogs/' . $blog->image));
        }

        // delete the blog from the database
        $blog->delete();

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }

    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function Active(Blog $blog)
    {
        $blog->status = '1';
        if ($blog->save()) {
            return redirect()
                ->route('blogs.index')
                ->with('success', 'blog Activated successfully.');
        } else {
            return back()->with('error', 'blog Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Blog $blog)
    {
        // dd($blog->status);
        $blog->status = '0';
        if ($blog->save()) {
            return redirect()
                ->route('blogs.index')
                ->with('success', 'blog Deactivated successfully.');
        } else {
            return back()->with('error', 'blog Dactivation Unsuccessfull.');
        }
    }
}
