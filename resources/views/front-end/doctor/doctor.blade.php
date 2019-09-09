@extends('front-end.master')

@section('title')
    Home || Doctors
@endsection

@section('body')

<section class="specialist-area section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Our Doctors</h2>
                    <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach($doctors as $doctor)
            <div class="col-lg-3 col-sm-6">
                <div class="single-doctor mb-4 mb-lg-0">
                    <div class="doctor-img">
                        <img src="{{ asset($doctor->doctor_image) }}" class="img-fluid">
                    </div>
                    <div class="content-area">
                        <div class="doctor-name text-center">
                            <h3>{{$doctor->doctor_name}}</h3>
                             <h6 class="text-success">Dept: {{$doctor->add_department}}</h6>
                             <h6 class="text-success">Mobile: {{$doctor->doctor_mobile}}</h6>
                        </div>

                        <div class="doctor-text text-center">
                            <p>{{$doctor->doctor_info}}</p>
                            <ul class="doctor-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>



    </div>
</section>
@endsection