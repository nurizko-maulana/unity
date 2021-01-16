<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Event;
 
class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(5);
 
        return view('event.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('event.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'Event_name' => 'required',
            'Event_desc' => 'required',
            'date_create' => 'required',
            'place_create' => 'required',
        ]);
 
        Event::create($request->all());
 
        return redirect()->route('event.index')
                        ->with('success','Event created successfully.');
    }
 
    public function show(Event $events)
    {
        return view('event.comment',compact('Event'));
    }
 
    public function edit(Event $events)
    {
        return view('event.edit',compact('Event'));
    }
 
    public function update(Request $request, Event $events)
    {
        $request->validate([
            'Event_name' => 'required',
            'Event_desc' => 'required',
            'date_create' => 'required',
            'place_create' => 'required',
        ]);
 
        $events->update($request->all());
 
        return redirect()->route('event.index')
                        ->with('success','Event updated successfully');
    }
 
    public function destroy(Event $events)
    {
        $events->delete();
 
        return redirect()->route('events.index')
                        ->with('success','Event deleted successfully');
    }
}