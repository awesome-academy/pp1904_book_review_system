<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RateFormRequest;
use App\Http\Requests\CreateBlogFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Blog;
use App\Repositories\Contracts\BlogInterface as BlogInterface;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(BlogInterface $blog)
    {
        $this->blogRepository = $blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->blogRepository->getAll();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogFormRequest $request)
    {
        $this->blogRepository->create($request);

        return redirect()->back()->with('status', 'Your blog has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = $this->blogRepository->findBySlug($slug);
        $comments = $this->blogRepository->getComment($slug);
        $count_comment = $comments->count();

        return view('blogs.show', compact('blog', 'comments', 'count_comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $blog = $this->blogRepository->findBySlug($slug);
        $categories = Category::all();

        return view('blogs.edit', compact('blog', 'categories'));
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
        $this->blogRepository->deleteBySlug($slug);
        $this->blogRepository->create($request);

        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $this->blogRepository->deleteBySlug($slug);

        return redirect('/blogs');
    }

    public function category($slug)
    {
        $blogs = $this->blogRepository->findByCategory($slug);

        return view('blogs.index', compact('blogs'));
    }

    public function rate(RateFormRequest $request)
    {
        $this->blogRepository->rate($request);
        $this->blogRepository->updateRateAverage($request->get('post_id'));

        return redirect()->back();
    }

    public function search(Request $request)
    {
        $blogs = $this->blogRepository->searchByTitle($request->get('search'));

        return view('blogs.index', compact('blogs'));
    }

    public function myBlog()
    {
        $blogs = $this->blogRepository->getMyBlog();

        return view('blogs.index', compact('blogs'));
    }
}
