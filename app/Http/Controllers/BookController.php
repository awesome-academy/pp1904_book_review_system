<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RateFormRequest;
use App\Models\Book;
use App\Models\User;
use App\Models\BookImage;
use Carbon\Carbon;
use App\Repositories\Contracts\BookInterface as BookInterface;

class BookController extends Controller
{
    protected $bookRepository;

    public function __construct(BookInterface $book)
    {
        $this->bookRepository = $book;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->bookRepository->getAll(20);

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
        $book = $this->bookRepository->findBySlug($slug);
        $comments = $this->bookRepository->getComment($slug);
        $count_comment = $comments->count();
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
        $this->bookRepository->rate($request);
        $this->bookRepository->updateRateAverage($request->get('post_id'));

        return redirect()->back();
    }

    public function category($slug)
    {
        $books = $this->bookRepository->findByCategory($slug);

        return view('books.index', compact('books'));
    }

    public function search(Request $request)
    {
        $books = $this->bookRepository->searchByTitle($request->get('search'));

        return view('books.index', compact('books'));
    }
}
