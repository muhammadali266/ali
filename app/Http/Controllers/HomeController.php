<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use App\User;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('home');
        if(Auth::id()) {
            $user =  User::findOrFail(Auth::id());

            $alluser = User::all();

            $users = UserResource::collection($alluser);



           return view('welcome',compact('user','users'));
        }
        else
            {
                return redirect('/login');
            }
    }
}
