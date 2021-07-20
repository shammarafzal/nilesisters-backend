<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageRequest;
use App\Http\Traits\GeneralTrait;
use App\Models\Resource;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepage = HomePage::all();
        return view('homepage.index', [
            'homepages' => $homepage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomePageRequest $request)
    {
        $homepage = HomePage::create($request->all());
        $this->storeImage($homepage);
        return redirect(route('homepage.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homepage)
    {
        return view('homepage.edit', [
            'homepage' => $homepage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(HomePageRequest $request, HomePage $homepage)
    {
        $homepage->update($request->all());
        $this->storeImage($homepage);
        return redirect(route('homepage.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homepage)
    {
        $homepage->delete();
        return redirect(route('homepage.index'));
    }

    public function storeImage($homepage)
    {
        $homepage->update([
            'image' => $this->imagePath('image', 'homepage', $homepage),
        ]);
    }
}
