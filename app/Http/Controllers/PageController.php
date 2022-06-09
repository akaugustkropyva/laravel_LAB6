<?php

namespace App\Http\Controllers;

use App\Models\Announcer;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function event($id){
        $event = Event::find($id);
        return view('event', compact('event'));
    }

    public function events(){
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function announcer($id){
        $announcer = Announcer::find($id);
        return view('announcer', compact('announcer'));
    }

    public function announcers(){
        $announcers = Announcer::all();
        return view('announcers', compact('announcers'));
    }

    public function category($id){
        $category = Category::find($id);
        return view('category', compact('category'));
    }

    public function categories(){
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
}
