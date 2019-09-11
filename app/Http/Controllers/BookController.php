<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RateFormRequest;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\Rate;
use App\Models\BookImage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(20);

        return view('books.index', compact('books'));
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
        $book = Book::whereSlug($slug)->firstOrFail();
        $comments = $book->comments()->where('parent_id', false)->with('user')->get();
        $count_comment = $book->comments()->count();
        $public_date = Carbon::parse($book->public_date)->toFormattedDateString();
        $book_images = BookImage::whereBookId($book->id)->get();

        return view('books.show',
            compact(
                'book',
                'comments',
                'count_comment',
                'public_date',
                'book_images'
            )
        );
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
    public function update(Request $request)
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

    public function rate(RateFormRequest $request)
    {
        $user_id = Auth::user()->id;
        Rate::rate($request, $user_id);
        Book::updateRateAverage($request);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }

    public function category($slug)
    {
        $category_id = Category::whereSlug($slug)->pluck('id');
        $books = Book::whereIn('category_id', $category_id)->paginate(20);

        return view('books.index', compact('books'));
    }
}
