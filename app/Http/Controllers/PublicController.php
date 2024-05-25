<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Product;
use App\Models\SubCategory;

class PublicController extends Controller
{
    public function index()
    {

        $blogs = Blog::where('status', '1')->orderBy('id', 'DESC')->take(3)->get();

        $categories = Category::where('status', '1')->orderBy('order', 'ASC')->get();
        $heros = Hero::where('status', '1')->orderBy('order', 'ASC')->get();
        $products = Product::where('status', '1')->orderBy('order', 'ASC')->get();
        $faqs = Faq::where('status', '1')->orderBy('order', 'ASC')->get();

        return view('web.pages.index', compact('blogs', 'heros', 'products', 'faqs', 'categories'));
    }


    public function getsubcat($id)
    {
        $subcategories = SubCategory::query()->where('status',1)->where('cat_id',$id)->get()->toJson();
        // dd($subcategories);
        return  $subcategories;
    }


    public function dashboard()
    {
        return view('admin.pages.index');
    }

    public function blogs()
    {
        // dd($title);
        $blogs = Blog::where('status', '1')->orderBy('id', 'DESC')->get();
        //  dd($blog);
        return view('web.pages.blog.index', compact('blogs'));
    }

    public function blogDetails($id)
    {
        // dd($id);
        $blog = Blog::find($id);
        // dd($blog);
        $content = Content::find(1);
        //  dd($blog);
        return view('web.pages.blog.details', compact('blog', 'content'));
    }

    public function about()
    {
        // dd('ok');
        return view('web.pages.about');
    }

    public function contact()
    {
        return view('web.pages.contact');
    }




    public function category($id)
    {
        $category = Category::find($id);
        $subcategories = SubCategory::where('cat_id',$id)->where('status',1)->get();
        $products = Product::where('status', '1')->where('product_category', $category->id)->orderBy('order', 'ASC')->get();

        return view('web.pages.category.details', compact('category', 'products','subcategories'));
    }
    public function products()
    {
        $categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        $products = Product::where('status', '1')->orderBy('order', 'ASC')->get();
        // dd($products);
        return view('web.pages.product.index', compact('products', 'categories'));
    }
    public function productdetails($id)
    {

        $product = Product::find($id);
        $products = Product::where('status', '1')->orderBy('order', 'ASC')->get();

        // dd($products);
        return view('web.pages.product.details', compact('products', 'product'));
    }
}
