@extends('admin.admin_master')
@section('title', 'Social  Setting Page')
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
                    <form class="forms-sample" method="POST" action="{{ route('update.social',$social->id) }}" >@csrf
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label class="col-form-label">Facebook<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="facebook" class="form-control"  value="{{ $social->facebook }}"  autofocus>
                                    <small class="form-control-feedback">
                                    @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Twitter<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="twitter" class="form-control"  value="{{ $social->twitter }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('twitter')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Youtube<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="youtube" class="form-control"  value="{{ $social->youtube }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('youtube')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Linkedin<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="linkedin" class="form-control"  value="{{ $social->linkedin }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Instagram<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="instagram" class="form-control"  value="{{ $social->instagram }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('instagram')
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
