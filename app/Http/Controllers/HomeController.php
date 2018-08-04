<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    public function index(User $user) {

        // $newPost = new Post;
        // $newPost->title ='A new title';
        // $newPost->body = 'A new body';

        // $newPost->save(); //only at this point the db is modified

        //$postToUpdate = $post->find(4);

        //$postToUpdate->title = 'this is an updated body';
        //$postToUpdate->save();
       // dd($postToUpdate);
       //$created_at =$postToUpdate->created_at;


        //$posts = $post->get();
        //dd($posts->all());

        //dd($request->name ."-". $request->prenume);

        // $username = "Userul Utilizatorului";
        // $nickname = "nickName";
        // return view('test.dog')->with([
        //     'username'=>$username,
        //     'nickname'=>$nickname,
        //     ]);

        //user
        // return response()->json([
        //     'post' => [
        //         ['id' => 1, 'title' => 'abc'],
        //         ['id' => 2, 'title' => 'cde'],
        //         ['id' => 3, 'title' => 'gfr'],
        //     ]
        // ]);


        //$activated = $user->where('activated', true)->get();


        $activated = $user->active()->get();
        $dezactivated = $user->notActive()->get();
        $human = $user->get();
        //dd($activated, $dezactivated,$human);
        return response()->json($human);

        //return view('test.dog')->with('posts', $posts);
    }
}
