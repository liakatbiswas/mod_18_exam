<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'excerpt',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Task 6
    public static function totalPostsCountByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }

    // Task 8
    public static function softDeletedData()
    {
        return self::onlyTrashed()->get();
    }

}
