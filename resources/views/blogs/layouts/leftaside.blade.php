<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Search</h3>
        </div>
        <div class="side-form">
            <form id="search-form" action="/blogs/search" method="post">
                @csrf
                <input type="text" name="search" placeholder="Search...." />
                <a href="javascript:{}" onclick="document.getElementById('search-form').submit();">
                    <i class="fa fa-search"></i>
                </a>
            </form>
        </div>
    </div>
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Categories</h3>
        </div>
        <div class="blog-side-menu">
            <ul>
                @foreach ($categories as $category)
                <li>
                    <a href="{{ action('BlogController@category', $category->slug) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
