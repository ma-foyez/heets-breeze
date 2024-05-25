<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

// namespace Intervention\Image\Facades;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subcategories = SubCategory::orderBy('id', 'DESC')->get();
        // dd($subcategories);
        return view('admin.pages.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        // dd(public_path());
        return view('admin.pages.subcategory.create',compact('categories'));
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
            'cat_id' => 'required',

        ]);
        $lastSubCategory = SubCategory::orderByDesc('order')->first();
        if ($lastSubCategory) {
            $data['order'] = $lastSubCategory->order + 1;
        } else {
            $data['order'] = 1;
        }
        $subcategory = SubCategory::create($data);

        if ($subcategory) {
            return redirect()->route('subcategories.index')->with('success', 'SubCategory created successfully.');
            # code...
        } else {
            return back()->with('error', 'SubCategory creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        return view('admin.pages.subcategory.view', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $categories = Category::where('status',1)->get();
        return view('admin.pages.subcategory.edit', compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $data = $request->validate([
            'title' => 'required',
            'cat_id' => 'required',

        ]);


        $subcategory = $subcategory->update($data);



        if ($subcategory) {
            return redirect()->route('subcategories.index')->with('success', 'SubCategory Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'SubCategory Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        // delete the subcategory's image file, if it exists

        if ($subcategory->image && file_exists(asset('uploads/subcategories/' . $subcategory->image))) {
            unlink(asset('uploads/subcategories/' . $subcategory->image));
        }

        // delete the subcategory from the database
        $subcategory->delete();

        return redirect()->route('subcategories.index')->with('success', 'SubCategory deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function Active(SubCategory $subcategory)
    {

        $subcategory->status = '1';
        if ($subcategory->save()) {
            return redirect()->route('subcategories.index')->with('success', 'subcategory Activated successfully.');
        } else {
            return back()->with('error', 'subcategory Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function Inactive(SubCategory $subcategory)

    {
        // dd($subcategory->status);
        $subcategory->status = '0';
        if ($subcategory->save()) {
            return redirect()->route('subcategories.index')->with('success', 'subcategory Deactivated successfully.');
        } else {
            return back()->with('error', 'subcategory Dactivation Unsuccessfull.');
        }
    }
}
