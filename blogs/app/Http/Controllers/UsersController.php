<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Users;

class UsersController extends Controller
{

    public function index()
    {
        $users = Users::with('posts')->get();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = Users::with('posts')->findOrFail($id);
        return view('users.show', compact('user'));
    }


    public function upload(Request $request)
    {
        $blog = new Blogs;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('blogimage', $imageName);
            $blog->image = $imageName;
        }

        $blog->name = $request->name;
        $blog->tags = $request->tag;
        $blog->desciption = $request->description;

        $blog->save();

        return redirect()->back()->with('message', 'blog uploaded sucessfully');
    }
}
