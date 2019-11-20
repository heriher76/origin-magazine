<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CoffeeShop;

class CoffeeShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffeeShop = CoffeeShop::all();

        return view('admin.profile.coffee-shop.index', compact('coffeeShop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.coffee-shop.create');
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

        CoffeeShop::create([
            'name' => $input['name'],
            'description' => $input['description'],
            'address' => $input['address'],
            'contact' => $input['contact'],
            'thumbnail' => $namaThumbnail
        ]);
        
        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('coffee-shop'), $namaThumbnail) : null ;

        alert()->success('Profil Kedai Kopi Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\CoffeeShopController@index'
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
        $coffeeShop = CoffeeShop::where('id', $id)->first();

        return view('admin.profile.coffee-shop.show', compact('coffeeShop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coffeeShop = CoffeeShop::where('id', $id)->first();

        return view('admin.profile.coffee-shop.edit', compact('coffeeShop'));
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

        $coffeeShop = CoffeeShop::where('id', $id)->first();

        if (isset($input['thumbnail'])) {
            $namaThumbnail = str_random().'.'.$input['thumbnail']->getClientOriginalExtension();
            
            if (isset($coffeeShop->thumbnail)) {
                unlink(public_path('coffee-shop/'.$coffeeShop->thumbnail));
            }
            $input['thumbnail']->move(public_path("coffee-shop/"), $namaThumbnail);  

            $coffeeShop->update([
	            'name' => $input['name'],
	            'description' => $input['description'],
	            'address' => $input['address'],
	            'contact' => $input['contact'],
                'thumbnail' => $namaThumbnail
            ]);
        }else{
            $coffeeShop->update([
	            'name' => $input['name'],
	            'description' => $input['description'],
	            'address' => $input['address'],
	            'contact' => $input['contact']
            ]);
        }

        alert()->success('Profil Kedai Kopi Berhasil Diperbarui !', '...');
        
        return redirect()->action(
            'Admin\CoffeeShopController@index'
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
        $coffeeShop = CoffeeShop::where('id', $id)->first();
        if (isset($coffeeShop->thumbnail)) {
            unlink(public_path('coffee-shop/'.$coffeeShop->thumbnail));
        }

        CoffeeShop::destroy($id);

        alert()->success('Profil Kedai Kopi Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\CoffeeShopController@index'
        );
    }
}
