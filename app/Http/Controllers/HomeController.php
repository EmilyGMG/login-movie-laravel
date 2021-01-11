<?php

namespace App\Http\Controllers;
use App\Lista;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if(Auth::user()->type_user == 'admin'){
            $listas = Lista::latest()->paginate(5);
            return view('home');
        }
        else{
            return view('home');
        }
        //($user->type_user);

}
}
