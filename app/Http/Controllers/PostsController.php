<?php

namespace App\Http\Controllers;
use App\Post;

 
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => ['required', 'image'],
        ]);

        // $imagePath = request('image')->store('uploads', 'public');

        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        // $image->save();

        auth()->user()->posts()->create([
            
            'title' => $data['title'],

            'description' => $data['description'],

            
            // 'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit($id){
        $post = Post::find($id);
        return view('edit',compact('post'));

    }



    public function update($id, Request $request){

        $post = Post::findOrFail($id);

        $this->validate($request, [
            
            'title' => 'required',
            'description' => 'required'
        ]);
    
        $input = $request->all();
    
        $post->fill($input)->save();
    



     
        return redirect('/profile/'.auth()->user()->id);
}


    public function destroy($id){
        $post=Post::findOrFail($id);
        $post->delete();
     
    return redirect()->back();

    }





}
