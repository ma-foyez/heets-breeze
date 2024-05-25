<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function about(Content $content)
    {
        dd($content);
    }

    public function editContact(Content $content)
    {
        return view('admin.pages.conent.contact', compact('content'));
    }
    public function updateContact(Request $request, Content $content)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'website_email' => 'required',
            'website_phone' => 'required',
            'office_address' => 'required',
            'whatsapp_number' => 'required',
        ]);

        $content->website_email = $validatedData['website_email'];
        $content->website_phone = $validatedData['website_phone'];
        $content->office_address = $validatedData['office_address'];
        $content->whatsapp_number = $validatedData['whatsapp_number'];


        // Update optional fields if they are present in the request
        // if ($request->has('facebook_page')) {
        //     $content->facebook_page = $request->input('facebook_page');
        // }

        // Update optional fields if they are present in the request
        $optionalFields = ['facebook_page', 'instagram_page', 'linkedin_page', 'youtube', 'skype'];

        foreach ($optionalFields as $field) {
            if ($request->has($field)) {
                $content->$field = $request->input($field);
            }
        }

        $content->save();

        return back()->with('success', 'About Content updated successfully.');
    }

    public function editAbout(Content $content)
    {
        return view('admin.pages.conent.about', compact('content'));
    }
    public function updateAbout(Request $request, Content $content)
    {
        $validatedData = $request->validate([
            'about_content' => 'required',
        ]);

        if ($request->hasFile('about_image')) {
            $image = $request->file('about_image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/content/') . $imageName);

            $content->about_image = $imageName;
        }

        $content->about_content = $validatedData['about_content'];

        $content->save();

        return back()->with('success', 'About Content updated successfully.');
    }

    public function editGeneral(Content $content)
    {
        // dd($content);
        return view('admin.pages.conent.general', compact('content'));
    }
    public function updateGeneral(Request $request, Content $content)
    {
        //  dd($request->all());
        $validatedData = $request->validate([
            'website_name' => 'required',
            'website_description' => 'required',
        ]);

        if ($request->hasFile('website_logo')) {
            $image = $request->file('website_logo');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/content/') . $imageName);

            $content->website_logo = $imageName;
        }

        if ($request->hasFile('website_favicon')) {
            $image = $request->file('website_favicon');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/content/') . $imageName);

            $content->website_favicon = $imageName;
        }

        $content->website_name = $validatedData['website_name'];
        $content->website_description = $validatedData['website_description'];

        if ($request->has('website_slogan')) {
            $content->website_slogan = $request->input('website_slogan');
        }

        $content->save();

        return back()->with('success', 'Website General Content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
