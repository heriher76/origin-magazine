<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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

        News::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'slug' => $slug,
            'thumbnail' => $namaThumbnail
        ]);
        
        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('berita'), $namaThumbnail) : null ;

        alert()->success('Berita Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\NewsController@index'
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
        $news = News::where('id', $id)->first();

        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::where('id', $id)->first();

        return view('admin.news.edit', compact('news'));
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

        $news = News::where('id', $id)->first();

        if (isset($input['thumbnail'])) {
            $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension();
            
            if (isset($news->thumbnail)) {
                unlink(public_path('berita/'.$news->thumbnail));
            }
            $input['thumbnail']->move(public_path("berita/"), $namaThumbnail);  

            $news->update([
	            'title' => $input['title'],
	            'description' => $input['description'],
	            'slug' => $input['slug'],
	            'thumbnail' => $namaThumbnail
            ]);
        }else{
            $news->update([
	            'title' => $input['title'],
	            'description' => $input['description'],
	            'slug' => $input['slug']
            ]);
        }

        alert()->success('Berita Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\NewsController@index'
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
        $news = News::where('id', $id)->first();
        if (isset($news->thumbnail)) {
            unlink(public_path('berita/'.$news->thumbnail));
        }

        News::destroy($id);

        alert()->success('Berita Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\NewsController@index'
        );
    }
}
