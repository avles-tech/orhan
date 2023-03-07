<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ONews;
use App\Gallery;
use App\Resource;
use App\Video;
class PageController extends Controller
{
    public function index(){
        $data=array(
            'pagetitle'=>'ORHAN',
            //'newss'=>News::orderBy('created_at','desc')->paginate(3),
        );
        return view('Pages.index')->with($data);
    }

    public function about_us(){
        $pagetitle='ORHAN - Meet the team';
        return view('Pages.about')->with('pagetitle',$pagetitle);
    }

    public function news(){
        $data=array(
            'pagetitle'=>'ORHAN - News',
            'news'=> ONews::orderBy('created_at','desc')->paginate(6)
        );
        return view('Pages.news')->with($data);
    }

    public function portfolio(){
        $data=array(
            'pagetitle'=>'ORHAN - Portfolio',
            'galleries'=> Gallery::orderBy('created_at','desc')->paginate(6)
        );
        return view('Pages.portfolio')->with($data);
    }

    public function showgallery($name)
    {
        //: Get Galley iformation by name
        $getGalleryInfo=DB::table('galleries')->where('name',$name)->first();
        $data = array(
            'pagetitle' => 'ORHAN - '.$name .' Gallery Images',
            'gallerys'=> Gallery::find($getGalleryInfo->id),
            'gImg' =>DB::table('gallery_imgs')->where('gallery_id', $getGalleryInfo->id)->orderBy('created_at','desc')->paginate(9)
        );
        return view('gallery.show')->with($data);
    }

    public function resources(){
        $data = array(
            'pagetitle' => 'ORHAN - Resources',
            'resources'=>Resource::all(),
        );
        return view('Pages.resources')->with($data);
    }

    public function videos(){
        $data = array(
            'pagetitle' => 'ORHAN - Videos',
            'videos' => Video::orderBy('created_at','desc')->paginate(6)
        );
        return view('Pages.videos')->with($data);
    }

    public function privacy(){
        $data = array(
            'pagetitle' => 'ORHAN - Privacy Policy',
        );
        return view('Pages.privacy')->with($data);
    }

    public function trustees(){
        $data = array(
            'pagetitle' => 'ORHAN - Trustees',
        );
        return view('Pages.trustees')->with($data);
    }
    
    public function gallery(){

        $data = array(
            'pagetitle' => 'ORHAN - Galleries',
            'galleries' => DB::table('galleries')->orderBy('created_at','desc')->paginate(6)          
        );
        return view('Pages.gallery')->with($data);
    }

    public function contribution(){
        $data = array(
            'pagetitle' => 'ORHAN - Contribution',
        );
        return view('Pages.contribution')->with($data);
    }

    public function shownews($title){
        $data=array(
            'pagetitle'=>'ORHAN - News',
            'news'=>DB::table('o_news')->where('title',$title)->first()
        );
        return view('news.show')->with($data);
    }

    public function contact(){
        $pagetitle='ORHAN - Contact';
        return view('Pages.contact')->with('pagetitle',$pagetitle);
    }

    public function bcontact(){
        $pagetitle='ORHAN - Bank Contact';
        return view('Pages.bcontact')->with('pagetitle',$pagetitle);
    }
}
