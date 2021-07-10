<!DOCTYPE html>
<html>

<head>
@include('includes.style')
</head>

<body id="page-top">
    <div id="wrapper">
     @include('includes.sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('includes.navbar')
                    @yield('create-jemaat')
            </div>
            @include('includes.footer')
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
 @include('includes.script')
 <script src="{{url('assets/js/jemaat.js')}}"></script>
</body>

</html>