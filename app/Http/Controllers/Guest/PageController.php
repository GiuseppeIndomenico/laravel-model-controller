<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //        $books = Book::where('id', '>', 2)->orderBy('title', 'asc')->limit(3)->get();
        //  dd($movies);

        return view('layouts.welcome', compact('movies'));
    }
    //controller
    public function show($id)
    {
        $movies = Movie::find($id);
        return view('movies.show', compact('movies'));
    }

}