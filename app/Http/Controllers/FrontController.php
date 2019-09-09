<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function index(){
        $departments = Department::where('publication_status',1)->get();

        return view('front-end.home.home',[
            'departments' => $departments
        ]);
    }

    public function department(){
        $departments = Department::where('publication_status',1)->get();

        return view('front-end.department.department',[
            'departments' => $departments
        ]);
    }

    public function doctor(){
//        $doctors = Doctor::get();

        $doctors = DB::table('doctors')
            ->join('departments','doctors.department_id','=','departments.id')
            ->select('doctors.*','departments.add_department')
            ->get();

        return view('front-end.doctor.doctor',[
            'doctors' => $doctors,
        ]);

    }

}
