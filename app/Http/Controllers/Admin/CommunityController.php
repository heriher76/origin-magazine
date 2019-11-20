<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Community;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $community = Community::all();

        return view('admin.profile.community.index', compact('community'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.community.create');
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

        Community::create([
            'name' => $input['name'],
            'description' => $input['description'],
            'contact' => $input['contact'],
            'thumbnail' => $namaThumbnail
        ]);
        
        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('community'), $namaThumbnail) : null ;

        alert()->success('Profil Komunitas Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\CommunityController@index'
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
        $community = Community::where('id', $id)->first();

        return view('admin.profile.community.show', compact('community'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $community = Community::where('id', $id)->first();

        return view('admin.profile.community.edit', compact('community'));
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

        $community = Community::where('id', $id)->first();

        if (isset($input['thumbnail'])) {
            $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension();
            
            if (isset($community->thumbnail)) {
                unlink(public_path('community/'.$community->thumbnail));
            }
            $input['thumbnail']->move(public_path("community/"), $namaThumbnail);  

            $community->update([
	            'name' => $input['name'],
	            'description' => $input['description'],
	            'contact' => $input['contact'],
                'thumbnail' => $namaThumbnail
            ]);
        }else{
            $community->update([
	            'name' => $input['name'],
	            'description' => $input['description'],
	            'contact' => $input['contact']
            ]);
        }

        alert()->success('Profil Komunitas Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\CommunityController@index'
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
        $community = Community::where('id', $id)->first();
        if (isset($community->thumbnail)) {
            unlink(public_path('community/'.$community->thumbnail));
        }

        Community::destroy($id);

        alert()->success('Profil Komunitas Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\CommunityController@index'
        );
    }
}
