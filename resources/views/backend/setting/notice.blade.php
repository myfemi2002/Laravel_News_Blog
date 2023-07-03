@extends('admin.admin_master')
@section('title', 'Notice  Setting Page')
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
                <div class="container">
                    @if($notice->status == 1)
                    <a href="{{ route('deactive.notice',$notice->id) }}" class="btn btn-rounded btn-danger" style="float: left;">Deactivated </a>
                    @else
                    <a href="{{ route('active.notice',$notice->id) }}" class="btn btn-rounded btn-success" style="float: left;"> Activated </a>
                    @endif
                </div>
                <div class="container">
                @if($notice->status == 1)
                <small class="text-success"  style="left: left;">Notice Activated</small>
                @else
                <small class="text-danger"  style="float: left;">Notice Deactivated</small>
                @endif
            </div>
                <div class="body">
                    <form class="forms-sample" method="POST" action="{{ route('update.notice',$notice->id) }}" >@csrf
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <label class="col-form-label">Notice<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <textarea type="text" name="notice" rows="5" class="form-control"  autofocus >{{ $notice->notice }} </textarea>
                                    <small class="form-control-feedback">
                                    @error('notice')
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
