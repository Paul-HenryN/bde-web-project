<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

// Import classes for mail
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\Email;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all()->where('is_published', true);

        return view('events.index', [
            'events' => $events
        ]);
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
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $request->image_url,
            'date' => $request->date,
            'price' => $request->price,
            'is_repeating' => $request->is_repeating
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        return view('events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('events.update', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        $event->name = $request->name;
        $event->description = $request->description;
        $event->image_url = $request->image_url;
        $event->date = $request->date;
        $event->is_repeating = $request->is_repeating;

        $event->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
    }

    /**
     * Search in the events
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->search;

        $events = Event::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        return view('events.search', [
            'events' => $events,
            'search' => $search
        ]);
    }

    /**
     * Publish an event and send an email to the user.
     *
     * @param  int  $event_id
     * @return \Illuminate\Http\Response
     */
    public function publish($event_id) 
    {
        $event = Event::find($event_id);
        $data = [
            'body' => 'Great Job ! Your suggestion was approved.'
        ];

        $event->is_published = true;
        $event->save();

        $event = Event::find($event_id);
		$user = User::find($event->user_id);

		Mail::to($user->email)->send(new Email($data));

		return back()->withText("Email sent successfully");
    }
}
