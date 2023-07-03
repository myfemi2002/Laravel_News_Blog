@extends('admin.admin_master')
@section('title', 'Edit SubCategory Page')
@section('admin')
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
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <form class="forms-sample" method="POST" action="{{ route('subcategory.update',$subcategory->id) }}">@csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Sub Category Name<span class="text-danger"> *</span></label>
                                <input type="text" name="subcategory" class="form-control"  value="{{ $subcategory->subcategory }}" placeholder="Sub Category">
                                <small class="form-control-feedback">
                                @error('subcategory')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputUsername2">Category Name <span class="text-danger"> *</span></label>                       
                                <select name="category_id" class="form-control">
                                    <option value="" selected="" disabled="">-- Select --</option>
                                    @foreach ($category as $rows)
                                    <option value="{{ $rows ->id }}" <?php if($rows->id == $subcategory->category_id) echo "selected"; ?> >{{ $rows ->category }}</option>
                                    @endforeach
                                </select>
                                <small class="form-control-feedback">
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </small>
                            </div>
                            <button type="submit" class="btn btn-danger me-2">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

