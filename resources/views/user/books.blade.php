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
<!-- booking section start -->
<section class="book" id="book">

    <h1 class="heading"><span>book</span>now</h1>
    @if (session()->has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="row">
        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>
        <form action="{{url('add_appintment')}}" method="post">
            @csrf
            <h3>book appointment</h3>
     <input type="text"  name="name" placeholder="Your name" class="box">
     <input type="number"  name="phone" placeholder="Your number" class="box">
     <input type="email" name="email" placeholder="Your mail" class="box">
     {{-- <input type="select" name="spec_id" placeholder="spcialzation" class="box"> --}}
     <select class="box " name="spec_id" aria-label="Default select example">
        <option value="">Select specializations </option>
        @foreach ($specs as $spec)
        <option value="{{$spec->id}}" >{{$spec->spec_name}}</option>
        @endforeach
      </select>
     <input type="text" name="age" placeholder="your age" class="box">
     <input type="date" name="date" class="box">
     <select style="width:285px;" class="box" name="time_from" aria-label="Default select example">
        <option value="">Select time from</option>
        <option value="12">12:00 pm</option>
        <option value="1">1:00 pm</option>
        <option value="2">2:00 pm</option>
        <option value="3">3:00 pm</option>
        <option value="4">4:00 pm</option>
        <option value="5">5:00 pm</option>
        <option value="6">6:00 pm</option>
        <option value="7">7:00 pm</option>
        <option value="8">8:00 pm</option>
      </select>
      <select style="width:285px;" class="box" name="time_to" aria-label="Default select example">
        <option value="">Select time to</option>
        <option value="1">1:00 pm</option>
        <option value="2">2:00 pm</option>
        <option value="3">3:00 pm</option>
        <option value="4">4:00 pm</option>
        <option value="5">5:00 pm</option>
        <option value="6">6:00 pm</option>
        <option value="7">7:00 pm</option>
        <option value="8">8:00 pm</option>
        <option value="9">9:00 pm</option>

      </select>
<br>
<input type="submit" value="book now" class="btn">

        </form>
    </div>
    </section>
    <!-- booking section end -->
    @include('user.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       <!-- custom link js -->
        <script src="js/script.js"></script>
    </body>
    </html>
