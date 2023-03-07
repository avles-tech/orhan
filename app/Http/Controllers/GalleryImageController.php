<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;
use App\Gallery;
use App\GalleryImg;

class GalleryImageController extends Controller
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
        $data = array(
            'pagetitle'=>'Dashboard - Orhan Gallery Images',
            'prod'=>Gallery::all(),
            'gallery_images'=>GalleryImg::all(),
        );
        return view('gallery.upload.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array(
            'galleryname'=> Gallery::all(),
            'pagetitle' =>'Dashboard - Uplaod Gallery Images'
        );
        return view('gallery.upload.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //: Get the gallery name from view form section
        $getGalleryName =$request->input('gallery_name');
        //Testing for Gallery name selected or not from user
        if( $getGalleryName == 0)
        {
            return redirect('/galleryImageSection/create')->with('error','The gallery name field is required.');            
            
        }else
        {
            $this->validate($request, [
                'gallery_image' => 'required',
            ]);
            //: Find the gallery name using gallery id
            $getGallerId=DB::table('galleries')->where('id',$getGalleryName)->first();
                
                // Handle File Upload
                if($request->hasFile('gallery_image')){
    
                    foreach($request->gallery_image as $gallery_image){
    
                        // Get filename with the extension
                        $filenameWithExt = $gallery_image->getClientOriginalName();
                        // Get just filename
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        // Get just ext
                        $extension = $gallery_image->getClientOriginalExtension();
                        // Filename to store
                        $fileNameToStore= $filename.'_'.time().'.'.$extension;
                        // Upload Image
                        $path = $gallery_image->move(public_path('/Uploads/gallery_images'), $fileNameToStore); 
                        
                        // Create News
                        $galleryimg = new GalleryImg;
                        $galleryimg->gallery_id = $getGallerId->id;
                        $galleryimg->Image = $fileNameToStore;
                        $galleryimg->description = $request->input('description');
                        $galleryimg->save();
                    }
                    
                } else {
                    $fileNameToStore = 'noimage.jpg'; 
                }

                return redirect('/galleryImageSection')->with('success', $getGallerId->name.' Images successfully Uploaded!');
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
        $getgalleryimageinfo=GalleryImg::find($id);
        
        $getGalleryId=DB::table('galleries')->where('id',$getgalleryimageinfo->gallery_id)->first();
        $data = array(
            'galleryimg' =>GalleryImg::find($id),
            'findgalleryname' =>$getGalleryId->name,
            'galleryname'=> Gallery::all(),
            'pagetitle' =>'Dashboard - Edit Gallery Images'
        );
        return view('gallery.upload.edit')->with($data);
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
        ////: Get the gallery name name from view form file
        $getGalleryName =$request->input('gallery_name');
        //Testing for Gallery name selected or not from user
        if( $getGalleryName == 0)
        {
            $redrictPath='/galleryImageSection/'.$id.'/edit';
            return redirect($redrictPath)->with('error','The gallery name field is required.');            
            
        }else
        {
            $this->validate($request, [
                'gallery_image' => 'image|nullable|max:1999'                
            ]);

            //: Find the gallery name using gallery id
            $getGallerId=DB::table('galleries')->where('id',$getGalleryName)->first();
                
                // Handle File Upload
                if($request->hasFile('gallery_image')){
        
                    // Get filename with the extension
                    $filenameWithExt = $request->file('gallery_image')->getClientOriginalName();
                    // Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $request->file('gallery_image')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    // Upload Image
                    $path = $request->file('gallery_image')->move(public_path('/Uploads/gallery_images'), $fileNameToStore);
                }

                // Create News
                $galleryimg = GalleryImg::find($id);
                $galleryimg->gallery_id = $getGallerId->id;
                $galleryimg->description = $request->input('description');
                    if($request->hasFile('gallery_image')){                        
                        $galleryimg->Image = $fileNameToStore;
                    }
                $galleryimg->save();    
                return redirect('/galleryImageSection')->with('success', $getGallerId->name.' Image has been successfully updated!');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galleryimg =GalleryImg::find($id);
        $GalleryName=Gallery::find($Galleryimg->gallery_id);
        // Delete Image
        File::delete('Uploads/gallery_images/'.$Galleryimg->image);
        $Galleryimg->delete(); 
        $successMsg='The '.$GalleryName->name.' Image Removed!';
        return redirect('/galleryImageSection')->with('success', $successMsg);
    }

}
