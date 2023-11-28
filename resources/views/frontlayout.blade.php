<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HostelHub</title>

        <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bs5/bootstrap.bundle.min.js')}}"></script>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="{{url('/')}}">HostelHub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                        @if(Session::has('customerlogin'))
                            <a class="nav-link" href="{{url('logout')}}">Logout</a>
                            <a class="nav-link btn btn-sm btn-danger text-white" href="{{url('booking')}}">Booking</a>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        
            @yield('content')
        

    </body>
</html>