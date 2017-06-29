<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postuser(Request $request)
        {
            
            //$posts = DB::select('select * from posts where user_id = ?', $request->id);

            $posts = DB::select('select * from posts where user_id = :id', ['id' => $request->user_id]);
            return view ('entry/postuser')->with('posts',$posts);

           
            //
        }

    public function index()
    {

        $posts = DB::select('select * from posts where is_private = :valor', ['valor' => 0]);
       
        return view ('entry/index')->with('posts',$posts);
        ///foreach($posts as $post){
            //echo '<br/>'.$post->title;
        //}
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('entry/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post;
        $post->title = $request->title;
        
        $post->is_private = $request->is_private;
        if ($post->is_private==1){
           $post->is_private=1;
        }else{
            $post->is_private=0;
        }
        $post->content = $request->content;
        $post->tag=$request->tag;
        $post->user_id=$request->user_id;
        $post->save();
        return redirect()->action('EntryController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = \App\Post::find($id);
        return view ('entry/show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = \App\Post::find($id);
        
        return view ('entry/edit')->with('post', $post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $post = \App\Post::find($id);
        $post->title = $request->title;
        $post->is_private = $request->is_private;
        if ($post->is_private==1){
             $post->is_private=1;
        }else{
            $post->is_private=0;
        }
        $post->content = $request->content;
        $post->tag = $request->tag;

        $post->save();

        return redirect()->action('EntryController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
        
        $post = \App\Post::find($id);
        $post->delete();
       //  Session::flash('message', 'Successfully deleted the nerd!');
//        return Redirect::to('nerds');
        return redirect()->action('EntryController@index');
    }
}
