<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Video;

class VideoController extends Controller
{
   
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=array(
            'pagetitle'=>'Dashabord - Videos',
            'videos'=>Video::all(),
        );
        return view('video.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array(
            'pagetitle'=>'Dashboard - Create Video link',
        );
        return view('video.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");
        
            // Create resource
            $Video = new Video;
            $Video->title = $request->input('title');
            $Video->url = $request->input('url');
            $Video->created_at = $NowTime;
            $Video->updated_at = $NowTime;       
            $Video->save();
            $sucessMsg='The Video link has been successfully created!';
            return redirect('/videoSection')->with('success',$sucessMsg);
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
        $data=array(
            'pagetitle'=>'Dashboard - Edit Video Link',
            'video'=>Video::find($id),
        );
        return view('video.edit')->with($data);
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
        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");
        
            // Create resource
            $Video = Video::find($id);
            $Video->title = $request->input('title');
            $Video->url = $request->input('url');
            $Video->updated_at = $NowTime;       
            $Video->save();
            $sucessMsg='The Video link has been successfully updated!';
            return redirect('/videoSection')->with('success',$sucessMsg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Video = Video::find($id);
        $Video->delete();
        $sucessMsg='The video link has been deleted!';        
        return redirect('/videoSection')->with('success', $sucessMsg);
    }
}
