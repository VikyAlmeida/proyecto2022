<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }
    public function create(){
        return view('admin.events.store');
    }
    public function store(Request $request){
        $this->validate($request,[
            'title' => ['required','min:3'],
            'initDate' => ['required'],
            'finishDate' => ['required'],
            'description' => ['required'],
            ]);
        $event = new Event();
        $event->title = $request->title;
        $event->initDate = $request->initDate;
        $event->finishDate = $request->finishDate;
        $event->description = $request->description;
        $event->save();
        return redirect('admin/events/create');
    }
    public function edit(Event $event){
        return view('admin.events.edit', compact('event'));
    }
    public function update(Request $request){
        $this->validate($request,[
            'title' => ['required','min:3'],
            'initDate' => ['required'],
            'finishDate' => ['required'],
            'description' => ['required'],
            ]);
        $event = Event::findOrFail($request->event_id);
        $event->title = $request->title;
        $event->initDate = $request->initDate;
        $event->finishDate = $request->finishDate;
        $event->description = $request->description;
        $event->save();
        return redirect('admin/events/');
    }
    public function destroy(Request $request){
        $event = Event::findOrFail($request->event_id);
        $event->delete();
        return back();
    }
}
