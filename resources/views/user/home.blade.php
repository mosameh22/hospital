<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- custom link style  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!-- header section start -->

<header class="header">
    <a href="#" class="logo"><i class="fas fa-heartbeat"></i>WeCare</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="{{url('show_doctors')}}">doctors</a>
        <a href="{{url('selectSpec')}}">book</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>
    <div>
        @if(Route::has('login'))
        @auth

        <x-app-layout>

        </x-app-layout>
            @else
        <a class="btn btn-primary" href="{{route('login')}}" role="button">login</a>
        <a class="btn btn-primary" href="{{route('register')}}" role="button">register</a>
        @endauth
        @endif
    </div>
    <div id ="menu-btn" class="fas fa-bars"></div>
</header>
  <!-- end section header -->
  <!-- section home start -->
<section class="home" id="home">
    <div class="image">
        <img src="image/home-img.svg">
    </div>
    <div class="content">
        <h3>stay safe,stay healthy</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsu</p>
            <a href="#" class="btn">contact us<span class="fas fa-chevron-right"></span></a>
    </div>
</section>
  <!-- section home end -->
  <!-- icon section start -->
  <section class="icons-container">
   <div class="icons">
       <i class="fas fa-user-md"></i>
       <h3>140+</h3>
       <p>doctors at work</p>
   </div>
   <div class="icons">
    <i class="fas fa-user-md"></i>
    <h3>1040+</h3>
    <p>satisfied patient</p>
</div>
<div class="icons">
    <i class="fas fa-procedures"></i>
    <h3>500+</h3>
    <p>bed facility</p>
</div>
<div class="icons">
    <i class="fas far fa-hospital"></i>
    <h3>80+</h3>
    <p>avaliable hospitals</p>
</div>
  </section>
    <!-- icon section end -->
@include('user.services')
@include('user.about')
{{-- @include('user.doctor') --}}
{{-- @include('user.booking') --}}
@include('user.review')
@include('user.blogs')
@include('user.footer')




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <!-- custom link js -->
    <script src="js/script.js"></script>
</body>
</html>
