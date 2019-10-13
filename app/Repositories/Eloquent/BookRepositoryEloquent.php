<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BookInterface as BookInterface;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class BookRepositoryEloquent implements BookInterface
{
    public function getAll($paginate = 20)
    {
        return Book::paginate($paginate);
    }

    public function find($id)
    {
        return Book::whereId($id)->firstOrFail();
    }

    public function findBySlug($slug)
    {
        return Book::whereSlug($slug)->firstOrFail();
    }

    public function delete($slug)
    {
        return Book::whereSlug($slug)->delete();
    }

    public function create($request)
    {
        return Book::create([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'), '-'),
            'detail' => $request->get('detail'),
            'image' => $request->get('image-1'),
            'public_date' => Carbon::parse($request->get('public_date'))->format('Y-m-d'),
            'author_id' => $request->get('author_id'),
            'publishing_company_id' => $request->get('publishing_company_id'),
        ]);
    }

    public function update($request, $slug)
    {
        return Book::whereSlug($slug)->update([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'), '-'),
            'detail' => $request->get('detail'),
            'image' => $request->get('image-1'),
            'public_date' => Carbon::parse($request->get('public_date'))->format('Y-m-d'),
            'author_id' => $request->get('author_id'),
            'publishing_company_id' => $request->get('publishing_company_id'),
        ]);
    }

    public function rate($request)
    {
        $user_id = Auth::user()->id;

        return Rate::updateOrCreate(
            [
                'post_id' => $request->get('post_id'),
                'post_type' => $request->get('post_type'),
                'user_id' => $user_id
            ],
            ['rate_point' => $request->get('rating')]
        );
    }

    public function updateRateAverage($book_id)
    {
        $book = Book::whereId($book_id)->firstOrFail();
        $rate_average = $book->rates()->avg('rate_point');
        $user_rate_total = $book->rates()->count();

        return Book::whereId($book_id)->update([
            'rate_average' => isset($rate_average) ? $rate_average : 0,
            'user_rate_total' => isset($user_rate_total) ? $user_rate_total : 0,
        ]);
    }

    public function findByCategory($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        return Book::where('category_id', $category->id)->paginate(20);
    }

    public function searchByTitle($key_word)
    {
        return Book::search($key_word)->paginate(20);
    }

    public function storeImage($request)
    {
        $image = $request->image;
        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $image_name= time().'.png';
        $path = public_path('img/book/'.$image_name);
        file_put_contents($path, $image);

        return ['image_name'=>'img/book/'.$image_name];
    }
}
