<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Figure;

class FigureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $figure = Figure::all();

        return view('admin.profile.figure.index', compact('figure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.figure.create');
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

        (isset($input['thumbnail'])) ? $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension() : $namaThumbnail = null;

        Figure::create([
            'name' => $input['name'],
            'description' => $input['description'],
            'address' => $input['address'],
            'contact' => $input['contact'],
            'thumbnail' => $namaThumbnail
        ]);
        
        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('figure'), $namaThumbnail) : null ;

        alert()->success('Profil Sosok Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\FigureController@index'
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
        $figure = Figure::where('id', $id)->first();

        return view('admin.profile.figure.show', compact('figure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $figure = Figure::where('id', $id)->first();

        return view('admin.profile.figure.edit', compact('figure'));
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

        $figure = Figure::where('id', $id)->first();

        if (isset($input['thumbnail'])) {
            $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension();
            
            if (isset($figure->thumbnail)) {
                unlink(public_path('figure/'.$figure->thumbnail));
            }
            $input['thumbnail']->move(public_path("figure/"), $namaThumbnail);  

            $figure->update([
	            'name' => $input['name'],
	            'description' => $input['description'],
	            'address' => $input['address'],
	            'contact' => $input['contact'],
                'thumbnail' => $namaThumbnail
            ]);
        }else{
            $figure->update([
	            'name' => $input['name'],
	            'description' => $input['description'],
	            'address' => $input['address'],
	            'contact' => $input['contact']
            ]);
        }

        alert()->success('Profil Sosok Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\FigureController@index'
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
        $figure = Figure::where('id', $id)->first();
        if (isset($figure->thumbnail)) {
            unlink(public_path('figure/'.$Figure->thumbnail));
        }

        Figure::destroy($id);

        alert()->success('Profil Sosok Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\FigureController@index'
        );
    }
}
