<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BlogInterface as BlogInterface;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BlogRepositoryEloquent implements BlogInterface
{
    public function getAll()
    {
        return Blog::orderBy('created_at', 'desc')->with(['user', 'book'])->paginate(5);
    }

    public function find($id)
    {
        return Blog::whereId($id)->firstOrFail();
    }

    public function findBySlug($slug)
    {
        return Blog::whereSlug($slug)->firstOrFail();
    }

    public function delete($slug)
    {
        return Blog::whereSlug($id)->delete();
    }

    public function create($request)
    {
        $user_id = Auth::user()->id;
        $image = $request->file('image');
        $name = Str::slug($request->get('title'), '-').'_'.time();
        $folder = 'img/blog/';
        $path = $folder . $name. '.' . $image->getClientOriginalExtension();
        $request->file('image')->move($folder, $name.'.'.$image->getClientOriginalExtension());

        return Blog::create([
            'user_id' => $user_id,
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'image' => $path,
            'short_desc' => $request->get('short_desc'),
            'category_id' => $request->get('category_id'),
        ]);
    }

    public function update($request, $id)
    {
        return User::whereId($id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
    }

    public function findByCategory($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        return Blog::where('category_id', $category_id)->with(['user', 'book'])->paginate(5);
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

    public function updateRateAverage($blog_id)
    {
        $blog = Blog::whereId($blog_id)->firstOrFail();
        $rate_average = $blog->rates()->avg('rate_point');
        $user_rate_total = $blog->rates()->count();

        return Blog::whereId($blog_id)->update([
            'rate_average' => isset($rate_average) ? $rate_average : 0,
            'user_rate_total' => isset($user_rate_total) ? $user_rate_total : 0,
        ]);
    }

    public function searchByTitle($key_word)
    {
        return BLog::where('title', 'like', "%".$key_word."%")->with(['user', 'book'])->paginate(5);
    }

    public function getMyBlog()
    {
        return Blog::whereUserId(Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
    }
}
