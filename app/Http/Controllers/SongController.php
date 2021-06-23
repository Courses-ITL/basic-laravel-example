<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Song::all();
        // select * from songs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Song::create($request->all());
        /* insert into songs values (nombre, autor) */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Song::find($id);
        // select * from songs where songs_id = $id;
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
        return Song::find($id)->update($request->all());
        // update songs set nombre = $request->nombre, autor = $request->autor where songs_id = $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::find($id)->delete();
        // delete songs where songs_id = $id;

        return 204;
    }
}
