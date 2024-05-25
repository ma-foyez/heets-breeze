<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Hero;
use Illuminate\Http\Request;


// namespace Intervention\Image\Facades;


class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $heros = Hero::orderBy('id', 'DESC')->get();
        // dd($heros);
        return view('admin.pages.hero.index', compact('heros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.hero.create');
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
                        'subtitle' => 'required',
            'image' => 'required|image|max:2048', // max file size of 2MB
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());
        $img->fit(1920, 800); // resize the image to fit within 380x310 while preserving aspect ratio
        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/heros/') . $imageName);
        $data['image'] = $imageName;
        $lastHero = Hero::orderByDesc('order')->first();
        if ($lastHero) {
            $data['order'] = $lastHero->order + 1;
        } else {
            $data['order'] = 1;
        }
        $hero = Hero::create($data);

        if ($hero) {
            return redirect()->route('heros.index')->with('success', 'Hero created successfully.');
            # code...
        } else {
            return back()->with('error', 'Hero creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('admin.pages.hero.view', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('admin.pages.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'order' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(1920, 800); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/heros/') . $imageName);

            $data['image'] = $imageName;
        }

        $hero = $hero->update($data);



        if ($hero) {
            return redirect()->route('heros.index')->with('success', 'Hero Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Hero Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        // delete the hero's image file, if it exists

        if ($hero->image && file_exists(asset('uploads/heros/' . $hero->image))) {
            unlink(asset('uploads/heros/' . $hero->image));
        }

        // delete the hero from the database
        $hero->delete();

        return redirect()->route('heros.index')->with('success', 'Hero deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function Active(Hero $hero)
    {

        $hero->status = '1';
        if ($hero->save()) {
            return redirect()->route('heros.index')->with('success', 'hero Activated successfully.');
        } else {
            return back()->with('error', 'hero Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Hero $hero)

    {
        // dd($hero->status);
        $hero->status = '0';
        if ($hero->save()) {
            return redirect()->route('heros.index')->with('success', 'hero Deactivated successfully.');
        } else {
            return back()->with('error', 'hero Dactivation Unsuccessfull.');
        }
    }
}
