<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SMFeedController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("smfeed.display");
    }

    public function users()
    {
        $users = \App\User::all();
        $roles = \App\Role::all();

        return view("smfeed.display", compact("users", "roles" ));
    }

    public function show($userId)
    {

        $user = \App\User::find($userId);
        $role = \App\Role::find($userId);


        return view("smfeed.show", compact('user','role'));
    }

    public function create()
    {
        return view ("smfeed.create");
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        \App\User::create($data);


        if($request->has('role')){
            $data1 = $request->input('role');
            $role = new Role;
            $role->name = $data1;
            $role->save();
        }
        elseif($request->has('role2')){
            $data1 = $request->input('role2');
            $role = new Role;
            $role->name = $data1;
            $role->save();
        }
        elseif($request->has('role3')){
            $data1 = $request->input('role3');
            $role = new Role;
            $role->name = $data1;
            $role->save();
        }


        return redirect('/admin/users/');
    }

    public function destroy($userId)
    {
        $user = \App\User::findorfail($userId);
        $role = \App\Role::findorfail($userId);
        $user -> delete();
        $role -> delete();

        return redirect('/admin/users/');
    }

    public function edit($userId)
    {
        $user = \App\User::findorfail($userId);
        $role = \App\Role::findorfail($userId);
        return view('smfeed.edit', compact('user','role'));
    }

    public function update(Request $request, $userId)
    {
        $user = \App\User::findorfail($userId);
        $role = \App\Role::findorfail($userId);

        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',

        ]);

        $user->update($data);

        $newrole = $request->input('role');
        $role->name = $newrole;
        $role->save();


        return redirect('/admin/users/');
    }

    public function createpost()
    {
        return view('smfeed.createpost');
    }

    public function storepost()
    {
        $data = request()->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $data['created_by'] = auth()->user()->id;


        \App\Post::create($data);

        return redirect('/posts/');

    }

    public function showposts()
    {
        $posts = \App\Post::all()->sortByDesc('created_at');
        $currentuser =  Auth::id();
        $roles = \App\Role::all();



        return view('smfeed.showposts', compact('posts', 'roles'))->with('currentuser', $currentuser);
    }

    public function editpost($postId)
    {
        $post = \App\Post::findorfail($postId);
        return view('smfeed.editpost', compact('post'));
    }

    public function updatepost($postId)
    {
        $post = \App\Post::findorfail($postId);

        $data = request()->validate([
            'title'=>'required',
            'content'=>'required'

        ]);

        $post->update($data);



        return redirect('/posts');
    }

    public function destroypost($postId)
    {
        $post = \App\Post::findorfail($postId);
        $post->delete();

        return redirect('/posts/');
    }





}
