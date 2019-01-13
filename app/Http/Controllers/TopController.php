<?php

namespace Trackime\Http\Controllers;

use Illuminate\Http\Request;
use Trackime\Tops;
use Trackime\Anime;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($genre = 'isekai')
    {
        return view('animes.tops',[
				'userAnimes'	=> Tops::where('user', Auth::user()->name)->where('genre', $genre)->paginate(12),
				'genreActually'	=> $genre,
				'animes'		=> Anime::all(),
				'genres'		=> Tops::all()->unique('genre')
			]
		);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		foreach( $request->animes as $anime){
			$top = new Tops;
				$top->user	= Auth::user()->name;
				$top->genre = $request->name;
				$top->anime = $anime;
			$top->save();
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
