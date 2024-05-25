<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

// namespace Intervention\Image\Facades;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::orderBy('id', 'DESC')->get();
        // dd($categories);
        return view('admin.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.category.create');
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
        $data = $request->validate([
            'title' => 'required',

        ]);
        $lastCategory = Category::orderByDesc('order')->first();
        if ($lastCategory) {
            $data['order'] = $lastCategory->order + 1;
        } else {
            $data['order'] = 1;
        }
        $category = Category::create($data);

        if ($category) {
            return redirect()->route('categories.index')->with('success', 'Category created successfully.');
            # code...
        } else {
            return back()->with('error', 'Category creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.pages.category.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'title' => 'required',


        ]);


        $category = $category->update($data);



        if ($category) {
            return redirect()->route('categories.index')->with('success', 'Category Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Category Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // delete the category's image file, if it exists

        if ($category->image && file_exists(asset('uploads/categories/' . $category->image))) {
            unlink(asset('uploads/categories/' . $category->image));
        }

        // delete the category from the database
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function Active(Category $category)
    {

        $category->status = '1';
        if ($category->save()) {
            return redirect()->route('categories.index')->with('success', 'category Activated successfully.');
        } else {
            return back()->with('error', 'category Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Category $category)

    {
        // dd($category->status);
        $category->status = '0';
        if ($category->save()) {
            return redirect()->route('categories.index')->with('success', 'category Deactivated successfully.');
        } else {
            return back()->with('error', 'category Dactivation Unsuccessfull.');
        }
    }
}
