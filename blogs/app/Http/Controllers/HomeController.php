<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\user;
use App\Models\Blogs;
class HomeController extends Controller
{

    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->name == 'Admin') {
                return view('admin.admin');
            } else {
                return view('user.home');
            }
        }
        else {
            return redirect()->back();
        }
    }

    public function index() {

        $blog = blogs::all();

        return view('user.home',compact('blog'));
    }
}
