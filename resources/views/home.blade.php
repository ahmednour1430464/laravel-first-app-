@extends('layouts.app')

@section('content')
<!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">


  <div class="row">


    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <div class="view overlay">
        <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>

    <div class="col-md-7 text-md-left ml-3 mt-3">


      <a href="#!" class="green-text">
        <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
      </a>

      <h4 class="h4 mb-4">Welcome to Udemy-Clone</h4>

      <p class="font-weight-normal">Our site is considered one of the leading sites in online courses,
         here you can find any course you want as student ,
          here too you can be registered as teacher ,
           begin your journey in creating online courses , hope you enjoy. 
      </p>
      <p class="font-weight-normal">by <a><strong>Ahmed Nour and Mohamed Rekaby</strong></a>, 18/11/2020</p>

      <a class="btn btn-success" href="{{(route('teacher_dashboard'))}}">Go to Dashboard</a>

    </div>


  </div>
 
</div>

@endsection