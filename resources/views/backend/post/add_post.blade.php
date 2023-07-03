@extends('admin.admin_master')
@section('title', 'Add Post Page')
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
                    <form class="forms-sample" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">@csrf
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label class="col-form-label">Title<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="title" class="form-control"  autofocus>
                                    <small class="form-control-feedback">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Category<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="category_id" class="form-control"   id="category_id">
                                        <option value="" selected="" disabled="">-- Select --</option>
                                        @foreach ($category as $rows)
                                        <option value="{{ $rows ->id }}">{{ $rows ->category }}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-control-feedback">
                                    @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Sub Category<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="subcategory_id" class="form-control"  id="subcategory_id">
                                        <option disabled="" selected="">--Select SubCategory--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">News Image Upload<span class="text-danger">*</span></label>
                                <div  class="custom-file">
                                    <input type="file" name="image" class="form-control" >
                                    <small class="form-control-feedback">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label">Tags<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input  type="text" name="tags" class="form-control"  autofocus>
                                    <small class="form-control-feedback">
                                    @error('tags')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label">Details<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <textarea class="summernote" name="details"></textarea>
                                    <small class="form-control-feedback">
                                    @error('details')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-check-label col-md-6"><input type="checkbox" name="headline" class="form-check-input" value="1"> Headline <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-check-label col-md-6"><input type="checkbox" name="bigthumbnail" class="form-check-input" value="1"> General Big Thumbnail <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-check-label col-md-6"><input type="checkbox" name="first_section" class="form-check-input" value="1"> First Section <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-check-label col-md-6"><input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1"> First Section Big Thumbnail <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
    This is for Category  -->
<script type="text/javascript">
    $(document).ready(function() {
          $('select[name="category_id"]').on('change', function(){
              var category_id = $(this).val();
              if(category_id) {
                  $.ajax({
                      url: "{{  url('/get/subcategory/') }}/"+category_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         $("#subcategory_id").empty();
                           $.each(data,function(key,value){
                               $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcategory+'</option>');
                               });

                      },

                  });
              } else {
                  alert('danger');
              }
          });
      });
</script>
@endsection
