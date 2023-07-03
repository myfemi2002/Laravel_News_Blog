@php
	$category = DB::table('categories')->orderBy('id','ASC')->get();
	// $social = DB::table('socials')->first();
	$horizontal = DB::table('ads')->where('type',2)->first();
	$websitesetting = DB::table('web_settings')->first();

@endphp

   <!-- header-start -->
	<section class="hdr_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<div class="header_logo">
						<a href=""><img src="{{ asset('frontend/assets/img/demo_logo.png') }}"></a>
					</div>
				</div>
				<div class="col-xs-6 col-md-8 col-sm-8">
					<div id="menu-area" class="menu_area">
						<div class="menu_bottom">
							<nav role="navigation" class="navbar navbar-default mainmenu">
						<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collection of nav links and other content for toggling -->
								<div id="navbarCollapse" class="collapse navbar-collapse">
									<ul class="nav navbar-nav">
										<li><a href="#">HOME</a></li>

											@foreach($category as $row)

                                            @php
                                            $subcategory = DB::table('subcategories')->where('category_id',$row->id)->get();
                                            @endphp

                                            <li class="dropdown">
												<a href="{{ URL::to('catpost/'.$row->id.'/'.$row->category) }}">{{ $row->category }} <b class="caret"></b></a>
											<ul class="dropdown-menu">

                                                @foreach($subcategory as $row)
												<li><a href="{{ URL::to('subcatpost/'.$row->id.'/'.$row->subcategory) }}">{{ $row->subcategory}}</a></li>
                                                @endforeach

											</ul>
											</li>
                                            @endforeach

								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 col-sm-12">
					<div class="header-icon">
						<ul>

							<!-- search-start -->
							<li><div class="search-large-divice">
								<div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="modal fade bd-example-modal-lg" action="" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12">
															<div class="custom-search-input">
																<form>
																	<div class="input-group">
																		<input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
																		<span class="input-group-btn">
																		<button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
																	</span> </div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.header-close -->


    <!-- top-add-start -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="top-add">
                        @if($horizontal == NULL)
                        @else
                        <a href="{{ $horizontal->link }}" target="_blank"><img src=" {{ asset($horizontal->ads) }}" alt="" /></a>
                        @endif
                    </div>
				</div>
			</div>
		</div>
	</section> <!-- /.top-add-close -->

	<!-- Breaking News-start -->
    <section>
        @php
        $headline = DB::table('posts')->where('posts.headline',1)->limit(3)->get();
        @endphp
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">
					Breaking News :
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">

					<marquee>
                        @foreach($headline as $row)
                        ** {{ $row->title }}
                    @endforeach
                    </marquee>
				</div>
			</div>
    	</div>
    </section>
	<!-- Breaking News-Ends -->


	@php
	$notice = DB::table('notices')->first();
	@endphp
		<!-- notice-start -->
		@if($notice->status == 1)
		<section>
			<div class="container-fluid">
				<div class="row scroll">
					<div class="col-md-2 col-sm-3 scroll_01"  style="background-color: red;">
						Notice :
					</div>
					<div class="col-md-10 col-sm-9 scroll_02"  style="background-color: red;">

						<marquee>
							** {{ $notice->notice }}
						</marquee>
					</div>
				</div>
			</div>
		</section>
		@endif
