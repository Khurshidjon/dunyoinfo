@extends('layouts.app')
@section('content')

<div class="container">
    <div class="page-breadcrumbs">
        <h1 class="section-title">Worlds</h1>	
        <div class="world-nav cat-menu">         
            <ul class="list-inline">                       
                <li class="active"><a href="#">Us</a></li>
                <li><a href="#">Crime</a></li>
                <li><a href="#">Local</a></li>
                <li><a href="#">Offbet</a></li>
                <li><a href="#">Openion</a></li>
            </ul> 					
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-sm-9">
                <div id="site-content" class="site-content">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="left-content">
                                <div class="world-news">
                                    
                                    <div class="post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/w1.jpg') }}" alt="" />
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
                                                <p>Text of the printing and typesetting industry orem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book ......</p>
                                            </div>
                                        </div>
                                        <div class="list-post">
                                            <ul>
                                                <li><a href="#">Detroit natives wary as recovery threatens to push them out <i class="fa fa-angle-right"></i></a></li>
                                                <li><a href="#">NBA impersonator does incredible Curry & Green impressions<i class="fa fa-angle-right"></i></a></li>
                                                <li><a href="#">Cellular carriers could gain some surprising competitors <i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div><!--/list-post--> 
                                    </div><!--/post--> 
                                </div><!--/.section-->		
                            </div><!--/.left-content-->
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="middle-content">										
                                <div class="section video-section">
                                    <div class="post video-post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="post-content">								
                                            <div class="video-catagory"><a href="#">World</a></div>
                                            <h2 class="entry-title">
                                                <a href="news-details.html">Our Closest Relatives Aren't Fans Of Daylight Saving Time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                    
                                    <div class="video-post-list">
                                        <ul>
                                            <li>
                                                <div class="post video-post small-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">								
                                                        <div class="video-catagory"><a href="#">World</a></div>
                                                        <h2 class="entry-title">
                                                            <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
                                            </li>
                                            <li>
                                                <div class="post video-post small-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">								
                                                        <div class="video-catagory"><a href="#">Business</a></div>
                                                        <h2 class="entry-title">
                                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
                                            </li>
                                            <li>
                                                <div class="post video-post small-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">								
                                                        <div class="video-catagory"><a href="#">World</a></div>
                                                        <h2 class="entry-title">
                                                            <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
                                            </li>
                                        </ul>
                                    </div>											
                                </div> <!-- /.video-section -->										
                            </div><!--/.middle-content-->
                        </div>
                    
                    </div>
                </div><!--/#site-content-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/2.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/1.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                </div>
                                <div class="col-sm-4">
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/3.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/4.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                </div>
                                <div class="col-sm-4">
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/5.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/6.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                </div>
                            </div>
                        </div><!--/.section -->	
                        
                        <div class="google-add">
                            <div class="add inner-add text-center">
                                <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/post/google-add.jpg') }}" alt="" /></a>
                            </div><!--/.section-->
                        </div><!--/.google-add-->
                        
                        <div class="section">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/11.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/8.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                </div>
                                <div class="col-sm-4">
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/9.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/10.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                </div>
                                <div class="col-sm-4">
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/12.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="{{ asset('frontend/images/post/13.jpg') }}" alt="" />
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
                                                <a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                </div>
                            </div>
                        </div><!--/.section -->	
                    </div>
                </div>
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
            
            <div class="col-sm-3">
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
                    
                    <div class="widget">
                        <h1 class="section-title title">This is Rising!</h1>
                        <ul class="post-list">
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/1.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">World</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post--> 
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/2.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Business</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/3.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Sports</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/4.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Technology</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/5.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Politics</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/6.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Health</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/7.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Lifestyle</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/rising/8.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Entertainment</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            <li>
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="{{ asset('frontend/images/post/7.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">								
                                        <div class="video-catagory"><a href="#">Business</a></div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">3 students arrested after body-slamming principal</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                            </li>
                            
                        </ul>
                    </div><!--/#widget-->
                </div><!--/#sitebar-->
            </div>
        </div>				
    </div><!--/.section-->
</div><!--/.container-->
@endsection