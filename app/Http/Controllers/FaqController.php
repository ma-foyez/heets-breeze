<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;




class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faqs = Faq::orderBy('id', 'DESC')->get();
        // dd($faqs);
        return view('admin.pages.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.faq.create');
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
            'question' => 'required',
            'subtitle' => 'required',
        ]);
        $lastFaq = Faq::orderByDesc('order')->first();
        if ($lastFaq) {
            $data['order'] = $lastFaq->order + 1;
        } else {
            $data['order'] = 1;
        }
        $faq = Faq::create($data);

        if ($faq) {
            return redirect()->route('faqs.index')->with('success', 'Faq created successfully.');
            # code...
        } else {
            return back()->with('error', 'Faq creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view('admin.pages.faq.view', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.pages.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate([
            'question' => 'required',
            'order' => 'required',
            'subtitle' => 'required',

        ]);

        $faq = $faq->update($data);



        if ($faq) {
            return redirect()->route('faqs.index')->with('success', 'Faq Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Faq Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {



        // delete the faq from the database
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'Faq deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function Active(Faq $faq)
    {

        $faq->status = '1';
        if ($faq->save()) {
            return redirect()->route('faqs.index')->with('success', 'faq Activated successfully.');
        } else {
            return back()->with('error', 'faq Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Faq $faq)

    {
        // dd($faq->status);
        $faq->status = '0';
        if ($faq->save()) {
            return redirect()->route('faqs.index')->with('success', 'faq Deactivated successfully.');
        } else {
            return back()->with('error', 'faq Dactivation Unsuccessfull.');
        }
    }
}
