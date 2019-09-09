@extends('admin.master')

@section('body')
    <div class="col-lg-12">
        <div class="card">
            <h3 class="text-success text-center" id="">{{Session::get('message')}}</h3>
            <div class="card-body">
                <h3 class="card-title text-center">Manage Doctor</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Sl No.</th>
                        <th>Department Name</th>
                        <th>Doctor Name</th>
                        <th>Gender</th>
                        <th>Mobile No</th>
                        <th>Doctor info</th>
                        <th>Doctor Image</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$doctor->add_department}}</td>
                            <td>{{$doctor->doctor_name}}</td>
                            <td>{{$doctor->doctor_gender==1?'Male':'Female'}}</td>
                            <td>{{$doctor->doctor_mobile}}</td>
                            <td>{{$doctor->doctor_info}}</td>
                            <td><img src="{{asset($doctor->doctor_image)}}"></td>

                            <td>
                                <a href="{{route('edit-doctor',['id'=>$doctor->id])}}" class="btn btn-success">
                                    <span><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="{{route('delete-doctor',['id'=>$doctor->id])}}" class="btn btn-danger">
                                    <span><i class="fa fa-trash"></i></span>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

