@extends('frontlayout')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-9 my-5">
      <h3>About Us</h3>
      <div class="row">
        <div class="col-8 col-sm-8">
        Welcome to HostelHub – your ultimate solution for hassle-free hostel accommodations at the Open University of Sri Lanka. At HostelHub, we're committed to revolutionizing the way students book their rooms, making the process seamless, convenient, and efficient.

        With a vision to simplify hostel management, we've designed HostelHub as a user-friendly web-based platform tailored specifically for the needs of our university's students. No more tedious in-person visits or complex procedures. HostelHub offers a streamlined booking experience right at your fingertips.

        Our mission is to empower students with real-time updates on room availability, ensuring transparency and informed decision-making. Moreover, we're dedicated to supporting the hostel administration by automating tasks, optimizing efficiency, and freeing up valuable time.

        HostelHub isn't just a system; it's a commitment to enhancing the overall experience for both students and administrative staff. Join us in this journey towards a more convenient and effective hostel management system.
        </div>
        <div class="col-4 col-sm-4 mt-3">
            <img src="{{asset('images/openUniLogo.jpg')}}" class="img-thumbnail">
          
        </div>
      </div>
    </div>
  </div>
</div>

@endsection