<?php

namespace App\Http\Controllers;

use App\comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comics::all();

        return view('listing', compact('comics'));
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(comics $comics)
    {
        //
    }
}
