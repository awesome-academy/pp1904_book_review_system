<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

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

    public function contact()
    {
        $messages = Contact::where('is_reply', false)->get();

        return view('admin.contacts.index', compact('messages'));
    }

    public function reply($id)
    {
        $message = Contact::whereId($id)->first();
        $user = User::whereId($message->id)->first();
        $message_id = $message->id;

        return view('admin.contacts.reply', compact('user', 'message_id'));
    }

    public function replySend(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'content' => $request->get('message'),
        ];
        Mail::send('mails.create', $data, function ($message) use ($request) {
            $message->to($request->get('email'));
        });

        Contact::whereId($request->get('message_id'))->update([
            'is_reply' => '1',
        ]);

        return redirect('/manager/contacts');
    }
}
