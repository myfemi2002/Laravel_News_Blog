@extends('admin.admin_master')
@section('title', 'Category Page')
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
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>@yield('title')</h2>            
                <a href="{{ route('subcategory.add') }}" class="btn btn-rounded btn-success" style="float: right;"><i class="fa fa-plus-circle"></i> Add </a>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Sub Category Name</th>                              
                            <th>Category Name</th>
                            <th>Date of Creation</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategory as $key => $rows)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> {{ $rows->subcategory }} </td>
                            <td> {{ $rows->category }} </td>
                            <td>
                                @if($rows->created_at == NULL)<span class="text-danger">No Date Set</span>
                                    @else
                                    {{ Carbon\Carbon::parse($rows->created_at)->diffForHumans() }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('subcategory.edit',$rows->id) }}" class="btn btn-primary btn-rounded btn-sm mb-2 " title="Edit Data" > <i class="fa fa-edit"> </i></a>
                                <a href="{{ route('subcategory.delete',$rows->id) }}"  class="btn btn-danger btn-rounded btn-sm mb-2 "  id="delete" title="Delete Data" > <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <form method="post">
                <div class="pagination"  style="float: right;">
                    <ul class="pagination-list">
                        {{ $subcategory->Links('pagination::bootstrap-4') }}
                    </ul>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
