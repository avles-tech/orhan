<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Resource;

class ResourceController extends Controller
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
            'pagetitle'=>'Dashabord - Resources',
            'resources'=>Resource::all(),
        );
        return view('resource.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array(
            'pagetitle'=>'Dashboard - Create Resource',
        );
        return view('resource.create')->with($data);
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
            'image' => 'max:3048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");
        
       
            // Handle File Upload
            if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->move(public_path('/Uploads/resource_documents'), $fileNameToStore);
            }
            else {
                $fileNameToStore = 'nothing';
            }

            // Create resource
            $Resource = new Resource;
            $Resource->name = $request->input('name');
            $Resource->description = $request->input('description');
            $Resource->file = $fileNameToStore;
            $Resource->created_at = $NowTime;
            $Resource->updated_at = $NowTime;       
            $Resource->save();
            $sucessMsg='The File has been successfully created!';
            return redirect('/resourceSection')->with('success',$sucessMsg);
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
            'pagetitle'=>'Dashboard - Edit Resource',
            'resources'=>Resource::find($id),
        );
        return view('resource.edit')->with($data);
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
            'image' => 'max:3048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        
            // Handle File Upload
            if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->move(public_path('/Uploads/resource_documents'), $fileNameToStore);
            } 

            // update resource
            $Resource = Resource::find($id);
            $Resource->name = $request->input('name');
            $Resource->description = $request->input('description');
            if($request->hasFile('image')){
                $Resource->file = $fileNameToStore;
            }
            $Resource->updated_at = $NowTime;       
            $Resource->save();
            $sucessMsg='The File has been successfully updated!';
            return redirect('/resourceSection')->with('success',$sucessMsg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resources = Resource::find($id);
        File::delete('Uploads/resource_documents/'.$resources->file);
        $resources->delete();
        $sucessMsg='The File record has been deleted!';        
        return redirect('/resourceSection')->with('success', $sucessMsg);
    }
}
