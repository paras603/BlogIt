@extends('layouts.default')

@section('content')
<div class="container blog">
    <div class="row justify-content-center mt-5 pt-5 mb-5 pb-5" >
        <div class="col-lg-8">
            <h2 class="blog-heading text-center mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing.</h2>
            <p class="blog-lead mb-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat cum at repellendus! Hic, illo corporis.</p>
            <img src="images/2.jpg" class="mb-4 img-fluid rounded">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto inventore eos repudiandae similique eius labore quis, fuga temporibus cum officiis pariatur culpa esse.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit esse a in ipsa dolorum eos nobis, cupiditate minus. Deserunt fuga exercitationem harum. Laudantium praesentium quae consequatur officiis labore quos totam aliquid eligendi sequi suscipit?</p>
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate laboriosam inventore nostrum hic iusto provident placeat voluptas reiciendis quia?</p>
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ipsum in repudiandae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim dicta quibusdam? Cupiditate est explicabo, enim a, saepe optio veniam, nihil asperiores nisi quis quia autem harum quidem adipisci quaerat libero atque? Quia, cupiditate?</p>
            
            <div class="row g-1 my-5">
                <div class="col-lg-4 post-gallery">
                    <a href="images/7.jpg"> <img class="img-fluid rounded" src="images/7.jpg"></a>
                    <a href="images/3.jpg"> <img class="img-fluid rounded" src="images/3.jpg"></a>
                </div>
                <div class="col-lg-4 post-gallery">
                    <a href="images/5.jpg"> <img class="img-fluid rounded" src="images/5.jpg"></a>
                    <a href="images/4.jpg"> <img class="img-fluid rounded" src="images/4.jpg"></a>
                </div>
                <div class="col-lg-4 post-gallery">
                    <a href="images/6.jpg"> <img class="img-fluid rounded" src="images/6.jpg"></a>
                    <a href="images/1.jpg"> <img class="img-fluid rounded" src="images/1.jpg"></a>
                </div>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem unde dolorum iure sequi doloribus quis quibusdam veniam in aut repellat? Eos, inventore voluptate!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe fuga voluptates nulla!</p>

            <div class="row share-blog mt-5 pt-5">
                <span class="mb-1 fw-bold small">Share</span>
                <ul class="list-unstyled social me-auto">
                    <li><a href="#"><span class="fab fa-twitter" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <h2 class="heading">Similar blogs</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @for($x=0; $x<3; $x++)
                <div class="col-lg-12">
                    <div class="related-blogs d-md-flex small-horizontal mb-5">
                        <div class="me-md-5 thumbnail mb-3 mb-md-0">
                            <img class="img-fluid rounded" src="images/4.jpg">
                        </div>
                        <div class="content">
                            <div class="post-meta mb-3">
                                <a href="#" class="category">Business</a><span class="date">&nbsp;-&nbsp;July 21, 2022</span>
                            </div>
                            <h2 class="heading"><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At.</a></h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquam quam mollitia distinctio eveniet ipsa id dolore, repudiandae unde, quidem dolor minima optio?</p>
                        </div>
                    </div>
                </div>
            @endfor --}}
            <div class="col-lg-12">
                <div class="related-blogs d-md-flex small-horizontal mb-5">
                    <div class="me-md-5 thumbnail mb-3 mb-md-0">
                        <img class="img-fluid rounded" src="images/4.jpg">
                    </div>
                    <div class="content">
                        <div class="post-meta mb-3">
                            <a href="#" class="category">Business</a><span class="date">&nbsp;-&nbsp;July 21, 2022</span>
                        </div>
                        <h2 class="heading"><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At.</a></h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquam quam mollitia distinctio eveniet ipsa id dolore, repudiandae unde, quidem dolor minima optio?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="related-blogs d-md-flex small-horizontal mb-5">
                    <div class="me-md-5 thumbnail mb-3 mb-md-0">
                        <img class="img-fluid rounded" src="images/1.jpg">
                    </div>
                    <div class="content">
                        <div class="post-meta mb-3">
                            <a href="#" class="category">Business</a><span class="date">&nbsp;-&nbsp;July 21, 2022</span>
                        </div>
                        <h2 class="heading"><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At.</a></h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquam quam mollitia distinctio eveniet ipsa id dolore, repudiandae unde, quidem dolor minima optio?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="related-blogs d-md-flex small-horizontal mb-5">
                    <div class="me-md-5 thumbnail mb-3 mb-md-0">
                        <img class="img-fluid rounded" src="images/7.jpg">
                    </div>
                    <div class="content">
                        <div class="post-meta mb-3">
                            <a href="#" class="category">Business</a><span class="date">&nbsp;-&nbsp;July 21, 2022</span>
                        </div>
                        <h2 class="heading"><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At.</a></h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquam quam mollitia distinctio eveniet ipsa id dolore, repudiandae unde, quidem dolor minima optio?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection