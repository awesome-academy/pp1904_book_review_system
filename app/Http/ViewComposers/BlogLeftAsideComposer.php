<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class BlogLeftAsideComposer
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = Category::get(['slug', 'name']);
    }

    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
    }
}
