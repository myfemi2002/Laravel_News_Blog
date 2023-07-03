@extends('admin.admin_master')
@section('title', 'Dashboard')
@section('admin')

@php
$category = DB::table('categories')->get();
$subcategory = DB::table('subcategories')->get();
$post = DB::table('posts')->get();
$ads = DB::table('ads')->get();

@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="javascript:void(0);">Welcome To News Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-align-justify"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{ url('/') }}" target="blank"><button class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend</button></a>
        </form>
    </div>
</nav>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon traffic">
                <div class="body">
                    <h6>Category</h6>
                    <h2><small class="info">{{ count($category) }}</small></h2>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon sales">
                <div class="body">
                    <h6>Sub-Category</h6>
                    <h2>{{ count($subcategory) }}</small></h2>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon email">
                <div class="body">
                    <h6>Post</h6>
                    <h2>{{ count($post) }}</small></h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon domains">
                <div class="body">
                    <h6>Advertsment</h6>
                    <h2>{{ count($ads) }}</small></h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    @include('admin.body.footer')
    <!-- /Footer Ends  -->
</div>

@endsection
