<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function insertPost(Request $request){
        $id = Str::uuid()->toString();
        $title = $request->input('title');
        $content = $request->input('content');
        $thumb = $request->input('thumb');
        $datetime = $request->input('datetime');
        
        DB::insert('insert into posts (id, title, content, thumb, created_at) values (?, ?, ?, ?, ?)', [$id, $title, $content, $thumb, $datetime]);
    }

    public function selectPosts(){
        $posts = DB::select('select * from posts limit 7');
        return $posts;
    }
}
