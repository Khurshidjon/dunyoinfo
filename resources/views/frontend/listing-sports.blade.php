@extends("layouts.app")
@section("content")

<div class="container">
			<div class="page-breadcrumbs">
				<h1 class="section-title">Sports</h1>	
				<div class="world-nav cat-menu">         
					<ul class="list-inline">                       
						<li class="active"><a href="#">All</a></li>
						<li><a href="#">Nfl</a></li>
						<li><a href="#">Mlb</a></li>
						<li><a href="#">Ncaa Fb</a></li>
						<li><a href="#">Golf</a></li>
						<li><a href="#">Nascar/Motor</a></li>
					</ul> 					
				</div>
			</div>
			<div class="section">
				<div class="row">
					<div class="col-sm-9">
						<div id="site-content" class="site-content">
							<div class="row">
								<div class="col-sm-6 col-md-8">
									<div class="left-content">
										<div class="sports-news">											
											<div class="post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/w2.jpg') }}" alt="" />
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
														<a href="news-details.html">Tale of the tape: Rookie seasons of Cam Newton and Jameis Winston</a>
													</h2>
													<div class="entry-content">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.....</p>
													</div>
												</div>
											</div><!--/post--> 
										</div><!--/.section-->	
										
										<div class="health-section">
											<div class="row">
												<div class="col-sm-12 col-md-6">
													<div class="post small-post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="{{ asset('frontend/images/post/sports/4.jpg') }}" alt="" />
															</div>
														</div>
														<div class="post-content">								
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">Top 10 NBA sophs ranked</a>
															</h2>
														</div>
													</div><!--/post--> 
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="post small-post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="{{ asset('frontend/images/post/sports/5.jpg') }}" alt="" />
															</div>
														</div>
														<div class="post-content">								
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">Clemson is the title game</a>
															</h2>
														</div>
													</div><!--/post--> 
												</div>
											</div>
										</div>
									</div><!--/.left-content-->
								</div>
								
								<div class="col-sm-6 col-md-4">
									<div class="middle-content">										
										<div class="post football-result">
											<div class="featured-result">
												<h2 class="league-name">Premier League</h2>
												<div class="row">
													<div class="col-xs-4">
														<img class="img-responsive" src="{{ asset('frontend/images/gallery/league1.png') }}" alt="" />
														<span class="match-result">3</span>
													</div>
													<div class="col-xs-4">
														<span class="verses">VS</span>
														<span class="match-time">90:00</span>
													</div>
													<div class="col-xs-4">
														<img class="img-responsive" src="{{ asset('frontend/images/gallery/league2.png') }}" alt="" />
														<span class="match-result">0</span>
													</div>
												</div>
											</div>
											<div class="league-result">
												<ul>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive"  src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
																<span class="team-name">Bra</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">3-2</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Arg</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
															</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
																<span class="team-name">Arg</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">5-4</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Bra</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
															</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
																<span class="team-name">Bra</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">1-2</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Arg</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
															</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive"  src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
																<span class="team-name">Bra</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">3-2</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Arg</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
															</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
																<span class="team-name">Arg</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">5-4</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Bra</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
															</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive"  src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
																<span class="team-name">Bra</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">3-2</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Arg</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
															</div>
														</div>
													</li>
													<li>
														<div class="row">
															<div class="col-xs-4">
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team2.png') }}" alt="" />
																<span class="team-name">Arg</span>
															</div>
															<div class="col-xs-4">
																<span class="match-result">5-4</span>
															</div>
															<div class="col-xs-4">
																<span class="team-name">Bra</span>
																<img class="img-responsive" src="{{ asset('frontend/images/gallery/team1.png') }}" alt="" />
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>									
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
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/1.jpg') }}" alt="" />
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
														<a href="news-details.html">It's down to Clemson and Alabama</a>
													</h2>
												</div>
											</div><!--/post--> 
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/2.jpg') }}" alt="" />
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
														<a href="news-details.html">Fight of the year: Vargas rallies to stop Miura</a>
													</h2>
												</div>
											</div><!--/post--> 
										</div>
										<div class="col-sm-4">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/3.jpg') }}" alt="" />
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
														<a href="news-details.html">Lawler ready welterweight title against Condit</a>
													</h2>
												</div>
											</div><!--/post--> 
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/6.jpg') }}" alt="" />
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
														<a href="news-details.html">Stanford band booed by Iowa fans during performance</a>
													</h2>
												</div>
											</div><!--/post--> 
										</div>
										<div class="col-sm-4">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/7.jpg') }}" alt="" />
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
														<a href="news-details.html">Woodson: No regrets as I prep for one final game</a>
													</h2>
												</div>
											</div><!--/post--> 
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/8.jpg') }}" alt="" />
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
														<a href="news-details.html">Sources: Maple Leafs front-runner to host Classic</a>
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
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/9.jpg') }}" alt="" />
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
														<a href="news-details.html">McDonald: Habs goalie Condon wins</a>
													</h2>
												</div>
											</div><!--/post--> 
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/10.jpg') }}" alt="" />
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
														<a href="news-details.html">LeBrun: Speed and skill prevail</a>
													</h2>
												</div>
											</div><!--/post--> 
										</div>
										<div class="col-sm-4">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/11.jpg') }}" alt="" />
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
														<a href="news-details.html">Weekend Homework: Big 12 will show its from the start</a>
													</h2>
												</div>
											</div><!--/post--> 
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/12.jpg') }}" alt="" />
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
														<a href="news-details.html">OBBWAA writers should relinquish  moral gatekeepers</a>
													</h2>
												</div>
											</div><!--/post--> 
										</div>
										<div class="col-sm-4">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/13.jpg') }}" alt="" />
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
														<a href="news-details.html">Lombardi: McCaffrey runs wild, offers glimpse</a>
													</h2>
												</div>
											</div><!--/post--> 
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="{{ asset('frontend/images/post/sports/14.jpg') }}" alt="" />
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
														<a href="news-details.html">ORittenberg: Six lessons we learned</a>
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