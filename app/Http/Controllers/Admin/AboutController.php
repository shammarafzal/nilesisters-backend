<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Traits\GeneralTrait;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the About.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('about.index', [
            'abouts' => $abouts,
        ]);
    }

    /**
     * Show the form for creating a new About.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created About in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $about = About::create($request->all());
        $this->storeImage($about);
        return redirect(route('about.index'));
    }

    /**
     * Display the specified About.
     *
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified About.
     *
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('about.edit', [
            'about' => $about,
        ]);
    }

    /**
     * Update the specified About in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, About $about)
    {
        $about->update($request->all());
        $this->storeImage($about);
        return redirect(route('about.index'));
    }

    /**
     * Remove the specified About from storage.
     *
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect(route('about.index'));
    }

    public function storeImage($about)
    {
        $about->update([
            'image' => $this->imagePath('image', 'about', $about),
        ]);
    }
}
