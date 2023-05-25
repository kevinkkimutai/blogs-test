<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('posts')->get();
        return view('tags.index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::with('posts')->findOrFail($id);
        return view('tags.show', compact('tag'));
    }
}
