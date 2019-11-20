<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotion = Promotion::all();

        return view('admin.promotion.index', compact('promotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotion.create');
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

        Promotion::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'slug' => $slug,
            'thumbnail' => $namaThumbnail
        ]);
        
        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('promotion'), $namaThumbnail) : null ;

        alert()->success('Promosi Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\PromotionController@index'
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
        $promotion = Promotion::where('id', $id)->first();

        return view('admin.promotion.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::where('id', $id)->first();

        return view('admin.promotion.edit', compact('promotion'));
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

        $promotion = Promotion::where('id', $id)->first();

        if (isset($input['thumbnail'])) {
            $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension();
            
            if (isset($promotion->thumbnail)) {
                unlink(public_path('promotion/'.$promotion->thumbnail));
            }
            $input['thumbnail']->move(public_path("promotion/"), $namaThumbnail);  

            $promotion->update([
	            'title' => $input['title'],
	            'description' => $input['description'],
	            'slug' => $input['slug'],
	            'thumbnail' => $namaThumbnail
            ]);
        }else{
            $promotion->update([
	            'title' => $input['title'],
	            'description' => $input['description'],
	            'slug' => $input['slug']
            ]);
        }

        alert()->success('Promosi Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\PromotionController@index'
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
        $promotion = Promotion::where('id', $id)->first();
        if (isset($promotion->thumbnail)) {
            unlink(public_path('promotion/'.$promotion->thumbnail));
        }

        Promotion::destroy($id);

        alert()->success('Promosi Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\PromotionController@index'
        );
    }
}
