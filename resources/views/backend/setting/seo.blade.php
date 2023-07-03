@extends('admin.admin_master')
@section('title', 'SEO  Setting Page')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <!-- Advanced Select2 -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>@yield('title')</h2>
                </div>
                <div class="body">
                    <form class="forms-sample" method="POST" action="{{ route('update.seo',$seo->id) }}" >@csrf
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label class="col-form-label">Meta Author<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="meta_author" class="form-control"  value="{{ $seo->meta_author }}"  autofocus>
                                    <small class="form-control-feedback">
                                    @error('meta_author')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Meta Title<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="meta_title" class="form-control"  value="{{ $seo->meta_title }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('meta_title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Meta Keyword<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="meta_keyword" class="form-control"  value="{{ $seo->meta_keyword }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('meta_keyword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Meta Description<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="meta_description" class="form-control"  value="{{ $seo->meta_description }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('meta_description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Google Analytics<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="google_analytics" class="form-control"  value="{{ $seo->google_analytics }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('google_analytics')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Google Verification<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="google_verification" class="form-control"  value="{{ $seo->google_verification }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('google_verification')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Alexa Analytics<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="alexa_analytics" class="form-control"  value="{{ $seo->alexa_analytics }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('alexa_analytics')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
