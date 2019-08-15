<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with(['user', 'book'])->paginate(5);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blogs = Blog::whereSlug($slug)->firstOrFail();
        $user_name = User::whereId($blogs->user_id)->firstOrFail()->value('name');
        $book_image = Book::whereId($blogs->book_id)->firstOrFail()->value('image');

        return view('blogs.show', compact('blogs', 'user_name', 'book_image'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function category($slug)
    {
        $category_id = Category::whereSlug($slug)->pluck('id');
        $book_id = Book::whereIn('category_id', $category_id)->pluck('id');
        $blogs = Blog::with(['user', 'book'])->whereIn('book_id', $book_id)->paginate(5);

        return view('blogs.index', compact('blogs'));
    }
}
