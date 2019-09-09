<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use DB;
use Image;
use App\Http\Requests\DoctorRequest;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $departments = Department::where('publication_status',1)->get();

        return view('admin.doctor.add-doctor',[
            'departments' => $departments
        ]);
    }

    public function uploadImage($request){
        $doctorImage = $request-> file('doctor_image');
        $imageName = $doctorImage-> getClientOriginalName();
        $directory = 'doctor-image/';
        $imageUrl = $directory.$imageName;
//        $doctorImage -> move($directory, $imageName);
        Image::make($doctorImage)->resize(100,100)->save($imageUrl);

        return $imageUrl;
    }

    public function saveDocrorInfo($request, $imageUrl){
        $doctor = new Doctor();
        $doctor->department_id = $request-> department_id;
        $doctor->doctor_name = $request-> doctor_name;
        $doctor->doctor_gender = $request-> doctor_gender;
        $doctor->doctor_mobile = $request-> doctor_mobile;
        $doctor->doctor_info = $request-> doctor_info;
        $doctor->doctor_image = $imageUrl;
        $doctor->save();
    }


    public function saveDoctor( DoctorRequest $request){
        $imageUrl= $this->uploadImage($request);
        $this->saveDocrorInfo($request,$imageUrl);

        return redirect('/doctor/add')->with('message','Doctor Saved');

    }

    public function manageDoctor(){
//        $doctors = Doctor::all();

        $doctors = DB::table('doctors')
            ->join('departments','doctors.department_id','=','departments.id')
            ->select('doctors.*','departments.add_department')
            ->get();

                return view('admin.doctor.manage-doctor',['doctors'=>$doctors]);
    }

    public function editDoctor($id){
        $doctors = Doctor::find($id);
        $departments = Department::where('publication_status',1)->get();
        return view('admin.doctor.edit-doctor',[
            'doctors' => $doctors,
            'departments'=> $departments
        ]);

    }

    public function doctorInfoUpdate($doctor, $request, $imageUrl){
        $doctor->department_id = $request-> department_id;
        $doctor->doctor_name = $request-> doctor_name;
        $doctor->doctor_gender = $request-> doctor_gender;
        $doctor->doctor_mobile = $request-> doctor_mobile;
        $doctor->doctor_info = $request-> doctor_info;
        $doctor->doctor_image = $imageUrl;
        $doctor->save();
    }

    public function updateDoctor(Request $request){
        $doctorImage = $request->file('doctor_image');
        if ($doctorImage){
            $doctor = Doctor::find($request->id);
            unlink($doctor->doctor_image);

            $imageUrl = $this->uploadImage($request);
            $this->doctorInfoUpdate($doctor, $request, $imageUrl);

            return redirect('/doctor/manage')->with('message','Doctor Updated');
        }

        else {
            $doctor = Doctor::find($request->id);
            $doctor->department_id = $request-> department_id;
            $doctor->doctor_name = $request-> doctor_name;
            $doctor->doctor_gender = $request-> doctor_gender;
            $doctor->doctor_mobile = $request-> doctor_mobile;
            $doctor->doctor_info = $request-> doctor_info;
            $doctor->save();

            return redirect('/doctor/manage')->with('message','Doctor Updated');
        }
    }

    public function deleteDoctor($id){
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect('/doctor/manage')->with('message','Doctor delated');
    }
}
