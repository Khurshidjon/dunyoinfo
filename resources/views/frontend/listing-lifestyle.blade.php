@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-breadcrumbs">
        <h1 class="section-title">Lifestyle</h1>
        <div class="world-nav cat-menu">
            <ul class="list-inline">
                <li class="active"><a href="#">Movie Time</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Travel & Tour</a></li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-sm-9">
                <div id="site-content" class="site-content">
                    <div class="lifestyle-news">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{ asset('frontend/images/post/w3.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
                                        <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                        <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                                        <li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-details.html">We Are Seeing The Effects Of The Minimum Wage Rise In San Francisco</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Text of the printing and typesetting industry orem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book dummy text ever since ......</p>
                                </div>
                            </div>
                        </div><!--/post-->
                    </div><!--/.section-->
                    <div class="section listing-news">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{ asset('frontend/images/post/life1.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
                                        <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                        <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-details.html">'Final Fantasy' star Lightning will be the new face of Louis Vuitton next year</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Text of the printing and typesetting industry orem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div><!--/post-->
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{ asset('frontend/images/post/life2.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
                                        <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                        <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-details.html">Wearable tech made strides in 2015, but it still has a long way to go</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Text of the printing and typesetting industry orem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div><!--/post-->

                        <div class="post google-add">
                            <div class="add inner-add text-center">
                                <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/post/google-add.jpg') }}" alt="" /></a>
                            </div><!--/.section-->
                        </div><!--/.google-add-->

                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{ asset('frontend/images/post/life3.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
                                        <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                        <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-details.html">Wet wedding: Yorkshire couple dons wellies to tie the knot in flooded town</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Text of the printing and typesetting industry orem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div><!--/post-->

                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{ asset('frontend/images/post/life4.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
                                        <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                        <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-details.html">We Are Seeing The Effects Of The Minimum Wage Rise In San Francisco</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Text of the printing and typesetting industry orem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div><!--/post-->

                    </div>
                </div><!--/#site-content-->

                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-long-arrow-left"></i> Previous Page</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next Page <i class="fa fa-long-arrow-right"></i></span></a></li>
                    </ul>
                </div>
            </div><!--/.col-sm-9 -->

            <div id="sticky" class="col-sm-3">
                <div id="sitebar">
                    <div class="widget">
                        <div class="add featured-add">
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/post/add/add1.jpg') }}" alt="" /></a>
                        </div>
                    </div><!--/#widget-->

                    <div class="widget follow-us">
                        <h1 class="section-title title">Follow Us</h1>
                        <ul class="list-inline social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div><!--/#widget-->
                </div><!--/#sitebar-->
            </div>
        </div>
    </div><!--/.section-->
</div><!--/.container-->
@endsection
