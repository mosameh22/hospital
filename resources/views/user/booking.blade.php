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
     {{-- <input type="text" name="specialization" placeholder="spcialzation" class="box"> --}}
     <select class="form-select w-50 text-dark" name="spec_id" aria-label="Default select example">
        <option value="">Select specializations </option>
        @foreach ($specs as $spec)
        <option value="{{$spec->id}}" >{{$spec->spec_name}}</option>
        @endforeach
      </select>
     <input type="text" name="age" placeholder="your age" class="box">
     <input type="date"  name="date" class="box">
     <input type="submit" value="book now" class="btn">

        </form>
    </div>
    </section>
    <!-- booking section end -->
