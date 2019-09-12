<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Blog;
use App\Models\Favorite;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $new_books = Book::orderBy('created_at', 'DESC')->take(10)->get();
        $top_books = Book::orderBy('rate_average', 'DESC')->take(10)->get();
        $most_views = Book::orderBy('user_rate_total', 'DESC')->take(10)->get();
        $tests = Book::take(1)->get();
        $new_blogs = Blog::orderBy('created_at', 'DESC')->take(5)->get();

        return view('home', compact('new_books', 'top_books', 'most_views', 'tests', 'new_blogs'));
    }

    public function favorite()
    {
        $favorites = Favorite::whereUserId(Auth::user()->id)->paginate(20);

        return view('favorites.index', compact('favorites'));
    }

    public function addBook(Request $request)
    {
        $favorites = Favorite::create([
            'user_id' => Auth::user()->id,
            'book_id' => $request->get('book_id'),
        ]);

        return redirect()->back();
    }

    public function contact()
    {
        return view('contacts.index');
    }

    public function contactSend(Request $request)
    {
        $message = Contact::create([
            'user_id' => Auth::user()->id,
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        return redirect()->back();
    }
}
