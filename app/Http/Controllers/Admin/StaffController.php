<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Http\Traits\GeneralTrait;
use App\Models\Resource;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index', [
            'staffs' => $staffs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $staff = Staff::create($request->all());
        $this->storeImage($staff);
        return redirect(route('staff.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit', [
            'staff' => $staff,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, Staff $staff)
    {
        $staff->update($request->all());
        $this->storeImage($staff);
        return redirect(route('staff.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect(route('staff.index'));
    }

    public function storeImage($staff)
    {
        $staff->update([
            'image' => $this->imagePath('image', 'staff', $staff),
        ]);
    }
}
