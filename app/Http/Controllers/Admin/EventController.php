<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();

        return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        ($input['slug']) ? $slug = $input['slug'] : $slug = str_slug($input['title'], '-').'-'.strftime('%F');
        (isset($input['thumbnail'])) ? $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension() : $namaThumbnail = null;

        Event::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'slug' => $slug,
            'thumbnail' => $namaThumbnail
        ]);
        
        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('event'), $namaThumbnail) : null ;

        alert()->success('Event Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\EventController@index'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::where('id', $id)->first();

        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::where('id', $id)->first();

        return view('admin.event.edit', compact('event'));
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
        $input = $request->all();

        $event = Event::where('id', $id)->first();

        if (isset($input['thumbnail'])) {
            $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension();
            
            if (isset($event->thumbnail)) {
                unlink(public_path('event/'.$event->thumbnail));
            }
            $input['thumbnail']->move(public_path("event/"), $namaThumbnail);  

            $event->update([
	            'title' => $input['title'],
	            'description' => $input['description'],
	            'slug' => $input['slug'],
	            'thumbnail' => $namaThumbnail
            ]);
        }else{
            $event->update([
	            'title' => $input['title'],
	            'description' => $input['description'],
	            'slug' => $input['slug']
            ]);
        }

        alert()->success('Event Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\EventController@index'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::where('id', $id)->first();
        if (isset($event->thumbnail)) {
            unlink(public_path('event/'.$event->thumbnail));
        }

        Event::destroy($id);

        alert()->success('Event Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\EventController@index'
        );
    }
}
