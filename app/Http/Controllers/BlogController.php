<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RateFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\Rate;

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
        $blog = Blog::whereSlug($slug)->firstOrFail();
        $user_name = User::whereId($blog->user_id)->firstOrFail()->value('name');
        $book_image = Book::whereId($blog->book_id)->firstOrFail()->value('image');
        $comments = $blog->comments()->where('parent_id', false)->with('user')->get();
        $count_comment = $blog->comments()->count();

        return view('blogs.show', compact('blog', 'user_name', 'book_image', 'comments', 'count_comment'));
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

    public function rate(RateFormRequest $request)
    {
        $user_id = Auth::user()->id;
        Rate::rate($request, $user_id);
        Blog::updateRateAverage($request);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }

    public function search(Request $request)
    {
        $blogs = Blog::blogSearch($request)->paginate(5);

        return view('blogs.index', compact('blogs'));
    }
}
