<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class DashboardController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle="ORHAN - Dashboard";
        return view('dashboard')->with('pagetitle',$pagetitle);
    }

    public function profile(){
        $data = array(
            'pagetitle' => 'ORHAN - User Profile',
        );
        return view('Pages.profile')->with($data);
    }

    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

            
        //:Update the user data
        $Users = User::find($id);
        $Users->name = $request->input('name');
        $Users->email = $request->input('email');
        $Users->password = bcrypt($request->input('password'));
        $Users->save();
        Auth::logout();
        return redirect('/orhan_admin')->with('success', 'Your Admin login credentials has been updated!');
    }
}
