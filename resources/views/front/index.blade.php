@extends('layouts.default')

@section('content')

<section class="bg-light">
    <div class="container site-section">
        <div class="row align-items-stretch retro-layout">
            <div class="col-md-4">
                    <a href="{{ url('blog')}}" class="back-img mb-30 v-height" style="background-image:url(images/1.jpg)">
                        <div class="site-section-title">
                            <h2>Lorem ipsum dolor sit amet, consectetur elit. Temporibus, et?</h2>
                            <span>Lorem, ipsum dolor.</span>
                        </div>
                    </a>
                    <a href="{{ url('blog')}}" class="back-img v-height" style="background-image:url(images/2.jpg)">
                        <div class="site-section-title">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, et?</h2>
                            <span>Lorem, ipsum dolor.</span>
                        </div>
                    </a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('blog')}}" class="back-img h-100" style="background-image:url(images/3.jpg)">
                    <div class="site-section-title">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, et?</h2>
                        <span>Lorem, ipsum dolor.</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="">
                    <a href="{{ url('blog')}}" class="back-img mb-30 v-height" style="background-image:url(images/4.jpg)">
                        <div class="site-section-title">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, et?</h2>
                            <span>Lorem, ipsum dolor.</span>
                        </div>
                    </a>
                </div>
                <div class="">
                    <a href="{{ url('blog')}}" class="back-img v-height" style="background-image:url(images/5.jpg)">
                        <div class="site-section-title">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, et?</h2>
                            <span>Lorem, ipsum dolor.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container site-section">
        <div class="row mb-5">
            <div class="col-lg-12 section-title">
                <h2>Recent Posts</h2>
            </div>
        </div>
        <div class="row">
            {{-- @for($x=0; $x<9; $x++)
            <div class="col-lg-4  recent-post">
                <a href="{{ url('blog')}}"><img src="images/7.jpg" class="img-fluid rounded"></a>
                <div class="post-detail">
                    <div class="post-meta">
                        <a class="post-category bg-success mb-3" href="#">lifestyle</a>
                        <span class="post-date">27 March, 2022</span>
                    </div>
                    <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                    <p><a href="{{ url('blog')}}">Read More</a></p>
                </div>
            </div>
            @endfor --}}

            <div class="col-lg-4" style="display: flex; flex-direction: column;">
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/5.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-primary mb-3" href="#">lifestyle</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/6.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-warning mb-3" href="#">travel</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/5.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-danger mb-3" href="#">food</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" style="display: flex;flex-direction: column;">
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/4.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-dark mb-3" href="#">technology</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/3.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-success mb-3" href="#">lifestyle</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/2.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-secondary mb-3" href="#">politics</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="display: flex;flex-direction: column;">
            
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/1.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-success mb-3" href="#">lifestyle</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/5.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-info mb-3" href="#">web development</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
                <div class="recent-post">
                    <a href="{{ url('blog')}}"><img src="images/7.jpg" class="img-fluid rounded"></a>
                    <div class="post-detail">
                        <div class="post-meta">
                            <a class="post-category bg-primary mb-3" href="#">programming</a>
                            <span class="post-date">27 March, 2022</span>
                        </div>
                        <h2><a href="{{ url('blog')}}">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea pariatur, dolores natus odio cum ipsum reiciendis? Asperiores, consequuntur explicabo vel debitis deleniti totam adipisci dignissimos inventore eligendi officia, voluptas voluptates tempora, dolorum ex illum.</p>
                        <p><a href="{{ url('blog')}}">Read More</a></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection