<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Search</h3>
        </div>
        <div class="side-form">
            <form action="#">
                <input type="text" placeholder="Search...." />
                <a href="#"><i class="fa fa-search"></i></a>
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
                <!-- <li><a href="#">Creative (2)</a></li>
                <li><a href="#">Fashion (1)</a></li>
                <li><a href="#">Image (1) </a></li>
                <li><a href="#">Photography (1) </a></li>
                <li><a href="#">Travel (4) </a></li>
                <li><a href="#">Videos (2) </a></li>
                <li><a href="#">Economic (2) </a></li> -->
            </ul>
        </div>
    </div>
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Recent Posts</h3>
        </div>
        <div class="blog-side-menu">
            <ul>
                <li><a href="#">Blog image post</a></li>
                <li><a href="#">Post with Gallery</a></li>
                <li><a href="#">Post with audio</a></li>
                <li><a href="#">Post with vedio</a></li>
                <li><a href="#">Post with image</a></li>
            </ul>
        </div>
    </div>
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Recent Comments</h3>
        </div>
        <div class="blog-side-menu">
            <ul>
                <li><a href="#">admin on Maecenas ultricies</a></li>
                <li><a href="#">admin on Tincidunt malesuada</a></li>
                <li><a href="#">admin on Rhoncus eleifend</a></li>
                <li><a href="#">admin on Quisque fringilla</a></li>
                <li><a href="#">admin on Pellentesque posuere</a></li>
            </ul>
        </div>
    </div>
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Archive</h3>
        </div>
        <div class="blog-side-menu">
            <ul>
                <li><a href="#"><i class="fa fa-calendar-o"></i>March 2016 (1)</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>April 2016 (2)</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>May 2016 (3)</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>June 2016 (4)</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>July 2016 (5)</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>August 2016 (6)</a></li>
            </ul>
        </div>
    </div>
    <div class="single-blog mb-50">
        <div class="blog-left-title">
            <h3>Blog Archive</h3>
        </div>
        <div class="catagory-menu" id="cate-toggle">
            <ul>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Image</a></li>
                <li><a href="#">Class Master</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Wordpress</a></li>
            </ul>
        </div>
    </div>
    <div class="single-blog">
        <div class="blog-left-title">
            <h3>Tags</h3>
        </div>
        <div class="blog-tag">
            <ul>
                <li><a href="#">Asian</a></li>
                <li><a href="#">Brown</a></li>
                <li><a href="#">Euro</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Franch</a></li>
                <li><a href="#">Hat</a></li>
                <li><a href="#">T-Shirt</a></li>
                <li><a href="#">Teen</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">White</a></li>
            </ul>
        </div>
    </div>
</div>
