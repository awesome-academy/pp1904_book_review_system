<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CreateBookFormRequest;
use App\Models\Book;
use App\Models\BookImage;
use App\Models\Category;
use App\Models\Author;
use App\Models\PublishingCompany;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        $publishing_companies = PublishingCompany::all();

        return view('admin.books.create', compact('categories', 'authors', 'publishing_companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = Book::createBook($request);
        BookImage::addImage($book->id, $request->get('image-2'));
        BookImage::addImage($book->id, $request->get('image-3'));
        BookImage::addImage($book->id, $request->get('image-4'));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $book = Book::whereSlug($slug)->firstOrFail();
        $categories = Category::all();
        $authors = Author::all();
        $publishing_companies = PublishingCompany::all();
        $book_images = BookImage::whereBookId($book->id)->pluck('image');

        return view('admin.books.edit',
            compact(
                'book',
                'categories',
                'authors',
                'publishing_companies',
                'book_images',
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $book = Book::updateBook($request, $slug);
        $book_id = Book::whereSlug($slug)->first()->id;
        BookImage::whereBookId($book_id)->delete();
        BookImage::addImage($book_id, $request->get('image-2'));
        BookImage::addImage($book_id, $request->get('image-3'));
        BookImage::addImage($book_id, $request->get('image-4'));

        return redirect('/manager/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $book = Book::whereSlug($slug);
        $book->delete();

        return redirect('/manager/books');
    }

    public function storeImage(Request $request)
    {
        $image = $request->image;
        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $image_name= time().'.png';
        $path = public_path('img/book/'.$image_name);
        file_put_contents($path, $image);

        return response()->json(['image_name'=>'img/book/'.$image_name]);
    }
}
