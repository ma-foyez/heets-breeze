<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

// namespace Intervention\Image\Facades;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('id', 'DESC')->get();
        $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        // dd($products);
        return view('admin.pages.product.index', compact('products', 'Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
            $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        return view('admin.pages.product.create',compact('Categories'));
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
            'description' => 'required',
            'product_category' => 'required',
            'product_sub_category' => 'nullable',
            'image' => 'required|image|max:2048', // max file size of 2MB
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());
        $img->fit(430, 515); // resize the image to fit within 380x310 while preserving aspect ratio
        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/products/') . $imageName);
        $data['image'] = $imageName;
        $lastProduct = Product::orderByDesc('order')->first();
        if ($lastProduct) {
            $data['order'] = $lastProduct->order + 1;
        } else {
            $data['order'] = 1;
        }
        $product = Product::create($data);

        if ($product) {
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
            # code...
        } else {
            return back()->with('error', 'Product creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.pages.product.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        return view('admin.pages.product.edit', compact('product', 'Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required',
            'order' => 'required',
            'product_category' => 'required',
            'description' => 'required',
            'product_sub_category' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(430, 515); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/products/') . $imageName);

            $data['image'] = $imageName;
        }

        $product = $product->update($data);



        if ($product) {
            return redirect()->route('products.index')->with('success', 'Product Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Product Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // delete the product's image file, if it exists

        if ($product->image && file_exists(asset('uploads/products/' . $product->image))) {
            unlink(asset('uploads/products/' . $product->image));
        }

        // delete the product from the database
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function Active(Product $product)
    {

        $product->status = '1';
        if ($product->save()) {
            return redirect()->route('products.index')->with('success', 'product Activated successfully.');
        } else {
            return back()->with('error', 'product Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Product $product)

    {
        // dd($product->status);
        $product->status = '0';
        if ($product->save()) {
            return redirect()->route('products.index')->with('success', 'product Deactivated successfully.');
        } else {
            return back()->with('error', 'product Dactivation Unsuccessfull.');
        }
    }
}
