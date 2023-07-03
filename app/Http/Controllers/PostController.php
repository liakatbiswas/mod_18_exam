<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function postsWithCategory()
    {
        $posts = Post::with('category')->get();
        return view('posts', compact('posts'));
        // return $posts;
        // show it to blade
    }

    // Task 6
    public function latestPost($category_id)
    {
        $postCount = Post::totalPostsCountByCategory($category_id);
        return response()->json(['Count' => $postCount]);
    }


    // Task 7
    public function postSoftDelete($id)
    {
        $softDelete = Post::findOrFail($id)->delete();

        if ($softDelete) {
            return 'successfully soft deleted';
        } else {
            return 'failed to softdelete';
        }

    }

    // Task 8
    public function softDeletedData()
    {
        $softData = Post::softDeletedData();
        return $softData;
    }
}
