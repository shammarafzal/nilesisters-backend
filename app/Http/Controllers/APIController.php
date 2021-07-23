<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Event;
use App\Models\HomePage;
use App\Models\Resource;
use App\Models\Staff;
use App\Models\Videos;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function ViewResources()
    {
        $resources = Resource::all();
        return response([
            'status' => true,
            'data' => $resources,
        ]);
    }
    public function ViewEvents()
    {
        $events = Event::all();
        return response([
            'status' => true,
            'data' => $events,
        ]);
    }
    public function ViewVideos()
    {
        $videos = Videos::all();
        return response([
            'status' => true,
            'data' => $videos,
        ]);
    }
    public function ViewStaff()
    {
        $staff = Staff::all();
        return response([
            'status' => true,
            'data' => $staff,
        ]);
    }
    public function ViewAbout()
    {
        $about = About::latest()->first();
        return response([
            'status' => true,
            'data' => $about,
        ]);
    }
    public function ViewContact()
    {
        $contact = Contact::all();
        return response([
            'status' => true,
            'data' => $contact,
        ]);
    }
    public function ViewhomePage()
    {
        $homepage = HomePage::all();
        return response([
            'status' => true,
            'data' => $homepage,
        ]);
    }
}
