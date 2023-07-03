@extends('admin.admin_master')
@section('title', 'Edit Gallery Page')
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
                    <form class="forms-sample" method="POST" action="{{ route('gallery.update',$photo->id) }}" enctype="multipart/form-data">@csrf
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label class="col-form-label">Photo Title<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="title" class="form-control"  value="{{ $photo->title }}"  autofocus>
                                    <small class="form-control-feedback">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label">Photo Type<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="type" class="form-control"  >
                                        <option value="" selected="" disabled="">-- Select --</option>
                                        <option value="1" {{ ($photo->type == "1" ? "selected": "") }}>Big Photo</option>
                                        <option value="0" {{ ($photo->type == "0" ? "selected": "") }}>Small Photo</option>
                                    </select>
                                    <small class="form-control-feedback">
                                    @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label">News Image Upload<span class="text-danger">*</span></label>
                                <div  class="custom-file">
                                    <input type="file" name="photo" class="form-control" >
                                    <small class="form-control-feedback">
                                    @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label">Old Image<span class="text-danger">*</span></label>
                                <div  class="custom-file">
                                    <img src="{{ URL::to($photo->photo)  }}" style="width: 70px; height: 50px;">
                                    <input type="hidden" name="oldimage" value="{{ $photo->photo }}">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary me-2 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
