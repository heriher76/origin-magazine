<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;
use App\CoffeeShop;
use App\Figure;
use App\Community;
use App\News;

class PagesController extends Controller
{
    public function index()
    {
        $opinions = Opinion::orderBy('updated_at', 'desc')->get();

    	return view('pages.home', compact('opinions'));
    }

    public function coffeeShop()
    {
        $coffeeShops = CoffeeShop::orderBy('updated_at', 'desc')->get();

    	return view('pages.profile.coffee-shop', compact('coffeeShops'));
    }

    public function figure()
    {
        $figures = Figure::orderBy('updated_at', 'desc')->get();

    	return view('pages.profile.figure', compact('figures'));
    }

    public function community()
    {
        $communities = Community::orderBy('updated_at', 'desc')->get();

    	return view('pages.profile.community', compact('communities'));
    }

    public function news()
    {
        $news = News::orderBy('updated_at', 'desc')->get();

        return view('pages.news.index', compact('news'));
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
