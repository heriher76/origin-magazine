<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;
use App\CoffeeShop;
use App\Figure;
use App\Community;
use App\News;
use App\Event;
use App\Promotion;

class PagesController extends Controller
{
    public function index()
    {
        $opinions = Opinion::orderBy('updated_at', 'desc')->get();
        $events = Event::orderBy('updated_at', 'desc')->paginate(5);
        $promotions = Promotion::orderBy('updated_at', 'desc')->limit(6)->get();
        $sliders = News::orderBy('updated_at', 'desc')->limit(3)->get();
        $latestNews = News::orderBy('updated_at', 'desc')->limit(4)->get();
        $otherNews = News::orderBy('updated_at', 'asc')->limit(4)->get();
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();

    	return view('pages.home', compact('opinions', 'events', 'promotions', 'sliders', 'latestNews', 'otherNews', 'footPromotions'));
    }

    public function coffeeShop()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $coffeeShops = CoffeeShop::orderBy('updated_at', 'desc')->paginate(5);

    	return view('pages.profile.coffee-shop', compact('coffeeShops', 'footPromotions'));
    }

    public function figure()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $figures = Figure::orderBy('updated_at', 'desc')->paginate(5);

    	return view('pages.profile.figure', compact('figures', 'footPromotions'));
    }

    public function community()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $communities = Community::orderBy('updated_at', 'desc')->paginate(5);

    	return view('pages.profile.community', compact('communities', 'footPromotions'));
    }

    public function news()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $news = News::orderBy('updated_at', 'desc')->paginate(5);
        $latestNews = News::orderBy('created_at', 'desc')->limit(5)->get();

        return view('pages.news.index', compact('news', 'latestNews', 'footPromotions'));
    }

    public function showNews($slug)
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $news = News::where('slug', $slug)->first();
        $otherNews = News::orderBy('updated_at', 'desc')->where('slug', '!=', $slug)->limit(5)->get();
        
        return view('pages.news.show', compact('news', 'otherNews', 'footPromotions'));
    }

    public function events()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $events = Event::orderBy('updated_at', 'desc')->paginate(5);
        $latestEvents = Event::orderBy('created_at', 'desc')->limit(5)->get();

        return view('pages.event.index', compact('events', 'latestEvents', 'footPromotions'));
    }

    public function showEvent($slug)
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $event = Event::where('slug', $slug)->first();
        $otherEvents = Event::orderBy('updated_at', 'desc')->where('slug', '!=', $slug)->limit(5)->get();
        
        return view('pages.event.show', compact('event', 'otherEvents', 'footPromotions'));
    }

    public function promotions()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $promotions = Promotion::orderBy('updated_at', 'desc')->paginate(6);

        return view('pages.promotions', compact('promotions', 'footPromotions'));
    }

    public function opinions()
    {
        $footPromotions = Promotion::orderBy('updated_at', 'asc')->limit(3)->get();
        $opinions = Opinion::orderBy('updated_at', 'desc')->paginate(12);

        return view('pages.opinions', compact('opinions', 'footPromotions'));
    }
}
