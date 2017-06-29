<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;
use SoftDeletes;


class UserController extends Controller
{
    //
    public function show ($id){
    	$user = \App\User::find($id);
        
        return view ('user/show')->with('user', $user);
    }
    public function index()
    {

        $users = \App\User::all();
        return view ('user/index')->with('users',$users);
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
        return view ('user/create');
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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->password=$request->password;
        $user->save();
        return redirect()->action('UserController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        //
        $user = \App\User::find($id);
        
        return view ('user/edit')->with('user', $user);

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

        $user = \App\User::find($id);
       	$user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->password=$request->password;
        $user->save();

        return redirect()->action('UserController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
       
        $user = \App\User::find($id);


       //  Session::flash('message', 'Successfully deleted the nerd!');

//        return Redirect::to('nerds');
        
        $posts = DB::select('select id from posts where user_id = :id', ['id' => $id]);

        foreach ($posts as $post) {
            $pos = \App\Post::find($post->id);
            $pos->delete();
        }
        
        $user->delete();

        return redirect()->action('UserController@index');
    }

     public function login()
    {
       
       return view ('user/login');
       
    }
}
