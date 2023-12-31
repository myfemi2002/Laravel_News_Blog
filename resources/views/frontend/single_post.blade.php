@extends('frontend.home_master')
@section('title', 'Home')
@section('content')

	<!-- single-page-start -->

	<section class="single-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
					   <li><a href="#"><i class="fa fa-home"></i></a></li>
						<li><a href="#">{{ $post->category }}</a></li>
						<li><a href="#">{{ $post->subcategory }}</a></li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<header class="headline-header margin-bottom-10">
						<h1 class="headline">{{ $post->title }}</h1>
					</header>


				 <div class="article-info margin-bottom-20">
				  <div class="row">
						<div class="col-md-6 col-sm-6">
						 <ul class="list-inline">


						 <li>{{ $post->name }} </li> <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ Carbon\Carbon::parse($post->created_at)->format('d, F Y') }} </li>   <li><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</li>
						 </ul>

						</div>
						<div class="col-md-6 col-sm-6 pull-right">
						</div>
					</div>
				 </div>
			</div>
		  </div>
		  <!-- ******** -->
		  <div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="single-news">
					<img src="{{ asset($post->image) }}" alt="" /><br><br>

                    <div class="sharethis-inline-share-buttons"></div>


					<h4 class="caption"> {{ $post->title }} </h4>
					<p>{!! $post->details !!}</p>
				</div>
				<!-- ********* -->


                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="0frUydeC"></script>

                <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="8"></div>

				<div class="row">
                    @php
                    $more = DB::table('posts')->where('category_id',$post->category_id)->orderBy('id','desc')->limit(6)->get();
                    @endphp

					<div class="col-md-12"><h2 class="heading">Related News</h2></div>

                    @foreach($more as $row)
                    <div class="col-md-4 col-sm-4">
						<div class="top-news sng-border-btm">
							<a href="#"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="{{ URL::to('view/post/'.$row->id) }}">{{ $row->title }}</a> </h4>
						</div>
					</div>
                    @endforeach
				</div>

			</div>
			<div class="col-md-4 col-sm-4">
                @php
                $latest = DB::table('posts')->orderBy('id','desc')->limit(8)->get();
                $favourite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(8)->get();
                $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(8)->get();
                @endphp
				<!-- add-start -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('frontend/assets/img/add_01.jpg') }}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
				<div class="tab-header">
					<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">Latest</a></li>
							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">Popular</a></li>
							<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">Highest</a></li>
						</ul>

					<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								<div class="news-titletab">
                                    @foreach($latest as $row)
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">{{ $row->title }}</a> </h4>
									</div>
                                    @endforeach
								</div>
							</div>


							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">
                                    @foreach($favourite as $row)
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">{{ $row->title }}</a> </h4>
									</div>
                                    @endforeach
								</div>
							</div>


							<div role="tabpanel" class="tab-pane fade" id="tab23">
								<div class="news-titletab">
                                    @foreach($highest as $row)
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">{{ $row->title }}</a> </h4>
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
				</div>
				<!-- add-start -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('frontend/assets/img/add_01.jpg') }}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>
		  </div>
		</div>
	</section>
	<!-- top-footer-start -->


    @endsection
