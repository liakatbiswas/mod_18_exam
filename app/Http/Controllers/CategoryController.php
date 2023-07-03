<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showPostByCategory($catId)
    {
        $categories = Category::with('posts')->where('id', '=', $catId)->get();
        return view('category', compact('categories'));
    }

    // task 11
    public function latestPosts($id)
    {
        $category = Category::findOrFail($id)->LatestPost();
        return $category;
    }

    // task 12
      //Task 12
      public function CategoriesLatestPosts()
      {
          $categories = Category::all();
          return view('categories',compact('categories'));
      }

}
