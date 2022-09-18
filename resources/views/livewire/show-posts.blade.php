<div>
    <div class="col-md-8 res-m-bttm">
        <div class="row text-center">
            @foreach($blogs as $blog)
                <div class="col-sm-6">
                    <div class="blog-post shadow round">
                        <div class="post-thumb"><a href="blog/{{$blog->id}}"><img src="{{$blog->thumb_path}}" alt="post"></a></div>
                        <div class="post-entry">
                            <div class="post-meta"><span>Posted {{$blog->created_at}}</span></div>
                            <h5><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h5>
                            <p>{{ substr($blog->desc, 0, 75) }}</p>
                            <a href="blog/{{$blog->id}}" class="btn-icon"><span class="pe pe-7s-angle-right"></span></a>
                        </div>
                    </div>
                    <div class="gaps size-3x"></div>
                </div>
            @endforeach

            {{ $blogs->links()  }}
        </div>
        <!--<div class="row text-center">
            <div class="col-md-12">
                <ul class="pagination pagination-lg">
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
        </div>-->
    </div>
    <div class="col-md-3 col-md-offset-1">
        <div class="sidebar-right wgs-box">
            <div class="wgs-search">
                <div class="wgs-content">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Search...">
                        <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="gaps size-1x"></div>
            </div>

            <div class="wgs-tags">
                <h5 class="wgs-title">Tags</h5>
                <div class="wgs-content">
                    <form method="post">
                        <ul class="tag-list clearfix">
                            @foreach($categories as $category)
                                <li><label for="{{$category->name}}">{{$category->name}}</label><input wire:model="category" id="{{$category->name}}" name="blogCategory" type="radio" value="{{$category->name}}"></li>
                            @endforeach
                        </ul>
                    </form>
                </div>
                <div class="gaps size-1x"></div>
            </div>

            <!-- Each Widget -->
            <div class="wgs-post">
                <h5 class="wgs-title">Recent Blog</h5>
                <div class="wgs-content">
                    @foreach($recentBlogs as $blog)
                        <div class="wgs-post-single recent-blogs">
                            <div class="wgs-post-thumb">
                                <a href="blog/{{$blog->id}}"><img src="{{$blog->thumb_path}}" alt="post-thumb"></a>
                            </div>
                            <div class="wgs-post-entry">
                                <h6 class="wgs-post-title"><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h6>
                                <span class="wgs-post-meta">{{$blog->created_at}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="gaps size-2x"></div>
            </div>
            <!-- End Widget -->
        </div>
    </div>
</div>
