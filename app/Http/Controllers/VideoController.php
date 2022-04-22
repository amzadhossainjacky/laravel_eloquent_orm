<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoComment;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //has 
        /* $video = Video::has('videoComment')->get();
        dd($video); */

        //whereHas
        /* $video = Video::whereHas('videoComment', function($q){
            $q->where('comment_name', 'like', 'video 1 is awesome');
        })->get();
        dd($video); */

        //doesntHave method
        /* $video = Video::doesntHave('videoComment')->get();
        dd($video); */

        //withCount method
        /* $video = Video::withCount('videoComment')->get();
        dd($video); */

        //Eager Loading Vs Lazy Loading 
        //Eager
        /* $video = Video::with('videoComment')->get();
        dd($video); */

        //lazy 
        $video =  Video::get();
        dd($video[1]->videoComment);


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
        //
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
