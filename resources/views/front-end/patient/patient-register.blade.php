@extends('front-end.master')
<br>
<br>
<br>
<br>
<br>
@section('body')
    <div class="section-top-border">
        <div class="row">
            <div class="offset-1 col-lg-7s col-md-5">
                <h3 class="mb-30 title_color">If you are a new user <strong>Register Here</strong></h3>
                {{Form::open(['route'=>'new-patient','method'=>'POST'])}}
                <div class="mt-10">
                    <input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'"
                           required class="single-input">
                </div>

                <div class="mt-10">
                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="number" name="phone" placeholder="Phone No." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                           required class="single-input">
                </div>
                <div class="mt-10">
								<textarea class="single-textarea" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"
                                          required></textarea>
                </div>
                <div class="mt-10">
                    <input type="submit" name="btn" value="Register" class="main_btn">
                </div>
                {{Form::close()}}
            </div>

        </div>
    </div>
@endsection
