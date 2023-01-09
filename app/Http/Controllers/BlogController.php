<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
      return view ('blogs.index')->with('blogs', $blogs);
    }
 
    
    public function create()
    {
        return view('blogs.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);
        return redirect('blogs')->with('flash_message', 'Blog Addedd!');  
    }
 
    
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show')->with('blogs', $blog);
    }
 
    
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit')->with('blogs', $blog);
    }
 
  
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $input = $request->all();
        $blog->update($input);
        return redirect('blogs')->with('flash_message', 'Blog Updated!');  
    }
 
  
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blogs')->with('flash_message', 'Blog deleted!');  
    }
}
