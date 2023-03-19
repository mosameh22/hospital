<!-- doctors section start -->
<section class="doctors" id="doctors">
    <h1 class="heading">our <span>doctors</span></h1>
    <div class="box-container">
@foreach ($show_doctors as $show_doctor )
        <div class="box">
            <img src="image/9d1704b0f3d9135472efba85d75321be.jpg">
            <h3> Name: {{$show_doctor->name}}</h3>
            <span> specialization: {{$show_doctor->spec?->spec_name}}</span>
            <h3> Address: {{$show_doctor->address}}</h3>
            <h3> mobile: {{$show_doctor->phone}}</h3>

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        @endforeach
    </div>
    </section>
    <!-- doctors section end -->
