<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Opinion;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opinion = Opinion::all();

        return view('admin.opinion.index', compact('opinion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opinion.create');
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

        Opinion::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'author' => $input['author']
        ]);
        
        alert()->success('Opini Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\OpinionController@index'
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
        $opinion = Opinion::where('id', $id)->first();

        return view('admin.opinion.show', compact('opinion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opinion = Opinion::where('id', $id)->first();

        return view('admin.opinion.edit', compact('opinion'));
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

        $opinion = Opinion::where('id', $id)->first();

        $opinion->update([
            'title' => $input['title'],
            'description' => $input['description'],
            'author' => $input['author']
        ]);

        alert()->success('Opini Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\OpinionController@index'
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
        Opinion::destroy($id);

        alert()->success('Opini Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\OpinionController@index'
        );
    }
}
