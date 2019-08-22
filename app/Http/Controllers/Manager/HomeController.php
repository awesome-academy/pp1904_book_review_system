<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $count_book = Book::get('id')->count();
        $count_user = User::get('id')->count();
        $count_category = Category::get('id')->count();
        $count_blog = Blog::get('id')->count();

        return view('admin.index', compact('count_book', 'count_user', 'count_category', 'count_blog'));
    }
}
