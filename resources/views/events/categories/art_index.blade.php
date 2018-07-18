

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Share</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('categorydetail/categorydetailcss/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('categorydetail/categorydetailcss/css/3-col-portfolio.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Dotslink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Arts Index.
      </h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ secure_asset('categorydetail/artrandom1.jpeg') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Mucha Exhibition</a>
              </h4>
               <p class="card-time">時間:2019/8/3</p>
              <p class="card-place">場所:Ueno,Tokyo</p>
              <p class="card-point">値段:100 Points</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ secure_asset('categorydetail/artrandom2.jpg') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tak Exhibition</a>
              </h4>
               <p class="card-time">時間:2019/9/12</p>
              <p class="card-place">場所:Hawaii</p>
              <p class="card-point">値段:170 Points</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ secure_asset('categorydetail/artrandom3.jpg') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Aki Exhibition</a>
              </h4>
               <p class="card-time">時間:1999/9/12</p>
              <p class="card-place">場所:Yokohama</p>
              <p class="card-point">値段:5000 Points</p>
            </div>
          </div>
        </div>
        
            <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ secure_asset('categorydetail/artrandom4.jpeg') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Steph Exhibition</a>
              </h4>
               <p class="card-time">時間:3333/9/11</p>
              <p class="card-place">場所:Tak's home</p>
              <p class="card-point">値段:1 Points</p>
            </div>
          </div>
        </div>
        
                    <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ secure_asset('categorydetail/artrandom5.jpeg') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Saki Exhibition</a>
              </h4>
               <p class="card-time">時間:1290/9/11</p>
              <p class="card-place">場所:Macdonald</p>
              <p class="card-point">値段:6666 Points</p>
            </div>
          </div>
        </div>
        
        
                            <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ secure_asset('categorydetail/artrandom6.jpeg') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Edward Exhibition</a>
              </h4>
               <p class="card-time">時間:2018/7/27</p>
              <p class="card-place">場所:Silicon Vally</p>
              <p class="card-point">値段:18 Points</p>
            </div>
          </div>
        </div>


    </div>

  </body>

</html>


<!--@extends('layouts.app')-->
<!--@section('content')-->

<!--@foreach($items as $item)-->
<!--<p>----------------------</p>-->
<!--    <a href = "{{route ('eventshow.get', $item->id) }}">-->
<!--        <p>{{$item->title}}</p>-->
<!--    </a>-->
<!--<p>{{$item->date}}</p> -->
<!--<p>{{$item->place}}</p> -->
<!--<p>{{$item->point}}ポイント</p> -->
<!--<p>----------------------</p>-->

<!--@endforeach-->
<!--@endsection-->
