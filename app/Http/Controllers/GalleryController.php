<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use App\GalleryImg;

class GalleryController extends Controller
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
            'gallerys' =>Gallery::all(),
            'pagetitle' =>'Dashboard - Orhan Galleries'
        ); 
        return view('gallery.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagetitle ='Dashboard - Create Gallery';
        return view('gallery.create')->with('pagetitle',$pagetitle);
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
            'name' => 'required',
            'gallery_cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle File Upload
        if($request->hasFile('gallery_cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gallery_cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gallery_cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('gallery_cover_image')->move(public_path('/Uploads/gallery_cover_images'), $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        // Create Gallery
        $gallery = new Gallery;
        $gallery->name = $request->input('name');
        $gallery->cover_image = $fileNameToStore;
        $gallery->created_at = $NowTime;
        $gallery->updated_at = $NowTime;      
        $gallery->save();  
        return redirect('/gallerySection')->with('success', 'Orhan Gallery successfully created!');
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
            'gallery' =>Gallery::find($id),
            'pagetitle' =>'Dashboard - Edit Gallery'
        ); 
        return view('gallery.edit')->with($data);
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
            'name' => 'required',
            'gallery_cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle File Upload
        if($request->hasFile('gallery_cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gallery_cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gallery_cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('gallery_cover_image')->move(public_path('/Uploads/gallery_cover_images'), $fileNameToStore);
        }

        // Update Gallery
        $gallery = Gallery::find($id);
        $gallery->name = $request->input('name');
        if($request->hasFile('gallery_cover_image')){
            $gallery->cover_image = $fileNameToStore;
        }
        $gallery->save();
        return redirect('/gallerySection')->with('success', 'Orhan Gallery has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery =Gallery::find($id);
        if($gallery->cover_image != 'noimage.jpg'){
            // Delete Gallery name cover Image
            File::delete('Uploads/gallery_cover_images/'.$gallery->cover_image);
            //: Get the gallery images by gallery id
            $getGallerimagesbyID=DB::table('gallery_imgs')->where('gallery_id',$id)->get();
            
            foreach($getGallerimagesbyID as $gallery_image){
                
                // Delete Gallery Images Image
                File::delete('Uploads/gallery_images/'.$gallery_image->image);
                $Galleryimg =GalleryImg::find($gallery_image->id);
                $Galleryimg->delete();
            }
        }
        
        $gallery->delete();
        return redirect('/gallerySection')->with('success', 'The Gallery Name and Images are removed!');
    }
}
