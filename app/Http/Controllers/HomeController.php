<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

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
        return view('home');
    }

    public function settings($id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    public function update(Request $req)
    {
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $data->save();
        return redirect('home');
    }
}
