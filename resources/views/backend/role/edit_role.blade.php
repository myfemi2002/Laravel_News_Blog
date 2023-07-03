@extends('admin.admin_master')
@section('title', 'Edit User Role Page')
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
                    <form class="forms-sample" method="POST" action="{{ route('roles.update',$editData->id) }}" enctype="multipart/form-data">@csrf
                        <div class="row clearfix">


                            <div class="col-md-6">
                                <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="name" class="form-control" value="{{ $editData->name }}" autofocus>
                                    <small class="form-control-feedback">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label">Email  <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="email" class="form-control" value="{{ $editData->email }}" readonly autofocus>
                                    <small class="form-control-feedback">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>


                            <div class="col-md-12 mb-4">

                                <label>Select Role</label>
                                <br/>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="category" class="custom-control-input" value="1"  id="cc1" @if($editData->category == 1) checked="" @endif >
                                    <label class="custom-control-label" for="cc1">Category</label>
                                    <small class="form-control-feedback">
                                    @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="post" class="custom-control-input" value="1" id="cc2" @if($editData->post == 1) checked="" @endif >
                                    
                                    <label class="custom-control-label" for="cc2">Post</label>
                                    @error('post')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="ads" class="custom-control-input" value="1"id="cc3"  @if($editData->ads == 1) checked="" @endif >
                                    {{-- <input type="checkbox" name="ads" class="custom-control-input" value="1" @if($editData->ads == 1) checked="" @endif > Advertisement   id="cc3"> --}}
                                    <label class="custom-control-label" for="cc3">Advertisement</label>
                                    @error('ads')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>

                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="setting" class="custom-control-input" value="1" Setting  id="cc4" @if($editData->setting == 1) checked="" @endif >
                                    <label class="custom-control-label" for="cc4">Setting</label>
                                    @error('setting')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>

                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="gallery" class="custom-control-input" value="1" id="cc5"  @if($editData->gallery == 1) checked="" @endif >
                                    <label class="custom-control-label" for="cc5">Gallery</label>
                                    @error('gallery')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>

                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="video" class="custom-control-input" id="cc6"  value="1" @if($editData->video == 1) checked="" @endif >
                                    <label class="custom-control-label" for="cc6">video</label>
                                    @error('video')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>

                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="website" class="custom-control-input" value="1" id="cc7" @if($editData->website == 1) checked="" @endif >
                                    <label class="custom-control-label" for="cc7">Website</label>
                                    @error('website')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>

                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" name="role" class="custom-control-input" value="1"  id="cc8"  @if($editData->role == 1) checked="" @endif >
                                    <label class="custom-control-label" for="cc8">Role</label>
                                    @error('role')
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
