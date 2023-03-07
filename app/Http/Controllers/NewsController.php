<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\ONews;
class NewsController extends Controller
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
            'pagetitle'=>'Dashabord - News',
            'news'=>ONews::all(),
        );
        return view('news.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array(
            'pagetitle'=>'Dashboard - Create News',
        );
        return view('news.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");
        
            // Handle File Upload
            if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->move(public_path('/Uploads/news_cover_images'), $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

            // Create News
            $News = new ONews;
            $News->title = $request->input('title');
            $News->author = $request->input('author');
            $News->description = $request->input('description');
            $News->body = $request->input('body');
            $News->cover_image = $fileNameToStore;
            $News->created_at = $NowTime;
            $News->updated_at = $NowTime;       
            $News->save();
            $sucessMsg='The News has been successfully created!';
            return redirect('/newsSection')->with('success',$sucessMsg);
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
            'pagetitle'=>'Dashboard - Edit News',
            'news'=>ONews::find($id),
        );
        return view('news.edit')->with($data);
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
        $this->validate($request, [
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        
            // Handle File Upload
            if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->move(public_path('/Uploads/news_cover_images'), $fileNameToStore);
            } 

            // Create Blog
            $News = ONews::find($id);
            $News->title = $request->input('title');
            $News->author = $request->input('author');
            $News->description = $request->input('description');
            $News->body = $request->input('body');
            if($request->hasFile('cover_image')){
            $News->cover_image = $fileNameToStore; }
            $News->updated_at = $NowTime;       
            $News->save();
            $sucessMsg='The News post has been successfully updated!';
            return redirect('/newsSection')->with('success',$sucessMsg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $News = ONews::find($id);
        if($News->cover_image != 'noimage.jpg'){
            File::delete('Uploads/news_cover_images/'.$News->cover_image);
        }
        $News->delete();
        $sucessMsg='The News record has been deleted!';        
        return redirect('/newsSection')->with('success', $sucessMsg);
    }
}
