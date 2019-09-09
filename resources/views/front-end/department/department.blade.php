@extends('front-end.master')

@section('title')
    Home || Departments
@endsection

@section('body')

<!-- Department Area Starts -->
<section class="department-area section-padding4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Departments</h2>
                    <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="department-slider owl-carousel">

                    @foreach($departments as $department)
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{ asset('/') }}/front/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>{{$department->add_department}}</h3>
                                <p>{{$department->department_description}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Department Area Starts -->