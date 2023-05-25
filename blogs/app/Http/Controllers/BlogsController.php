<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::with('author', 'tags')->get();
        return view('blogss.index', compact('blogss'));
    }

    public function show($id)
    {
        $blogs = Blogs::with('author', 'tags')->findOrFail($id);
        return view('blogs.show', compact('blogs'));
    }
}
