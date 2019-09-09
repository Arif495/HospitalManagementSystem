@extends('admin.master')

@section('body')
    <div class="offset-1 col-lg-10">
        <div class="card">
            <div class="card-header">
                <strong>Add Doctor</strong>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            </div>
            <div class="card-body card-block">
                {{Form::open(['route'=>'new-doctor','method'=>'post', 'class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
                <div class="form-group row">
                    <label class="control-label col-md-3">Department Name</label>
                    <div class="col-md-9">
                        <select class="form-control" name="department_id">
                            <option>---Select Department Name---</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->add_department}}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class="text-danger offset-3">{{$errors->has('department_id') ? $errors->first('department_id') : ' '}}</span>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">Doctor Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="doctor_name">
                    </div>
                    <span class="text-danger offset-3">{{$errors->has('doctor_name') ? $errors->first('doctor_name') : ' '}}</span>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">Gender</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio" name="doctor_gender" value="1"> Male </label>
                        <label><input type="radio" name="doctor_gender" value="0"> Female </label>
                    </div>
                    <span class="text-danger offset-3">{{$errors->has('doctor_gender') ? $errors->first('doctor_gender') : ' '}}</span>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">Doctor mobile</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="doctor_mobile">
                    </div>
                    <span class="text-danger offset-3">{{$errors->has('doctor_mobile') ? $errors->first('doctor_mobile') : ' '}}</span>
                </div>


                <div class="form-group row">
                    <label class="control-label col-md-3">Doctor info</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="doctor_info" rows="5"></textarea>
                    </div>
                    <span class="text-danger offset-3">{{$errors->has('doctor_info') ? $errors->first('doctor_info') : ' '}}</span>
                </div>


                <div class="form-group row">
                    <label class="control-label col-md-3">Doctor Image</label>
                    <div class="col-md-9">
                        <input type="file" name="doctor_image">
                    </div>
                    <span class="text-danger offset-3">{{$errors->has('doctor_image') ? $errors->first('doctor_image') : ' '}}</span>
                </div>

                <div class="form-group row">
                    <div class="offset-3 col-md-9">
                        <input type="submit" name="btn" class="btn btn-primary" value="Add Doctor">
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection


