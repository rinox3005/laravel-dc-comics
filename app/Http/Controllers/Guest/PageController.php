<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trendingComics1 = Comic::whereBetween('id', [2, 5])->get();
        $trendingComics2 = Comic::whereBetween('id', [7, 10])->get();

        return view('home', compact('trendingComics1', 'trendingComics2'));
    }
}
