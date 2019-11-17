<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.home');
    }

    public function coffeeShop()
    {
    	return view('pages.profile.coffee-shop');
    }

    public function figure()
    {
    	return view('pages.profile.figure');
    }

    public function community()
    {
    	return view('pages.profile.community');
    }

    public function news()
    {
        return view('pages.news.index');
    }

    public function showNews()
    {
        return view('pages.news.show');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function promotions()
    {
        return view('pages.promotions');
    }

    public function opinions()
    {
        return view('pages.opinions');
    }
}
