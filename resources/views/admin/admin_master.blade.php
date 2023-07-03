<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Webpixels">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>:: @yield('title'):: Newinfo News</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fontawesome/css/font-awesome.min.css') }}">

        <!-- Select2 -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/select2/select2.css') }}" />
<!-- colorpicker -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<!-- tagsinput -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/summernote/dist/summernote.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts-c3/plugin.css') }}"/>
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/dark.css') }}" type="text/css">
        <!-- toaster -->
        <link href=" {{ asset('backend/assets/toaster/toastr.css') }}" rel="stylesheet" />
    </head>
    <body class="theme-black full-dark">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{ asset('backend/assets/images/brand/icon_black.svg') }}" width="48" height="48" alt="ArrOw"></div>
                <p>Please wait...</p>
            </div>
        </div>

                        <!-- Header -->
                        @include('admin.body.header')
                        <!-- /Header Ends -->



        <div class="main_content" id="main-content">
                        <!-- sidebar -->
                        @include('admin.body.sidebar')
                        <!-- /sidebar Ends -->


            <div class="page">
                <!-- Body -->
                @yield('admin')
                <!-- /Body Ends -->



            </div>


        </div>
        <!-- Core -->
        <script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script>


        <script src="{{ asset('backend/assets/vendor/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
<script src="{{ asset('backend/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('backend/assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
<script src="{{ asset('backend/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script> <!-- tagsinput -->
<script src="{{ asset('backend/assets/vendor/nouislider/js/nouislider.min.js') }}"></script> <!-- SLIDERS -->

        <script src="{{ asset('backend/assets/bundles/c3.bundle.js') }}"></script>
        <script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
        <script src="{{ asset('backend/assets/js/theme.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/advanced-form.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/index.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/todo-js.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/summernote/dist/summernote.js') }}"></script>

            {{-- sweetalert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
        $(document).on('click', '#delete', function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Are you sure?',
                    text: "Delete This Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link
        Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
        }
        })
        });
        });

    </script>
    {{-- toaster --}}
    <script  type="text/javascript" src="{{ asset('backend/assets/toaster/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
        }

        @endif

    </script>
    </body>
</html>
