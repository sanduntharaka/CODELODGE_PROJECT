@extends('frontlayout')
@section('content')

<!-- Page Content-->
<div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('images/b.jpg')}}" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">HostelHub</h1>
                    <p>Welcome to HostelHub – your ultimate solution for hassle-free hostel accommodations at the Open University of Sri Lanka. At HostelHub, we're committed to revolutionizing the way students book their rooms, making the process seamless, convenient, and efficient.</p>
                    <a class="btn btn-primary" href="{{url('about')}}">Read more</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Welcome to HostelHub: Where Hassle-Free Hostel Room Bookings Begin!!</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                
                @if(!Session::has('customerlogin'))
                <div class="col-md-4 mb-5">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h2 class="card-title">Student Login</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="{{url('login')}}">Student login</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h2 class="card-title">Student Register</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                            
                        </div>
                        <div class="card-footer"><a class="btn btn-danger text-white" href="{{url('register')}}">Student Register</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h2 class="card-title">Admin Login</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-info" href="{{url('staff/login')}}">Staff Login</a></div>
                    </div>
                </div>
                @else
                <div class="col-md-4 mb-5">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h2 class="card-title">Booking</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                            
                        </div>
                        <div class="card-footer"><a class="btn btn-info text-white" href="{{url('front/booking/')}}">View Bookings</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h2 class="card-title">Booking</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                            
                        </div>
                        <div class="card-footer"><a class="btn btn-primary text-white" href="#">Edit Booking</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h2 class="card-title">Booking</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                            
                        </div>
                        <div class="card-footer"><a class="btn btn-danger text-white" href="{{url('booking')}}">Booking</a></div>
                    </div>
                </div>
                @endif
            </div>
</div>

<!-- Footer-->
<footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js')}}/scripts.js"></script>

@endsection