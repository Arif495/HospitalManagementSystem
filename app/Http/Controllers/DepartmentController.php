<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\DepartmentrRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('admin.department.add-department');
    }
    public function saveDepartment(DepartmentrRequest $request){

        $department = new Department();
        $department -> add_department = $request->add_department;
        $department -> department_description = $request-> department_description;
        $department -> publication_status = $request-> publication_status;
        $department-> save();

        return redirect('/department/add')-> with('message','Department saved Successfully');
    }

    public function manageDepartment(){
        $departments = Department::all();
        return view('admin.department.manage-department',['departments' => $departments]);

    }

    public function openDepartment($id){
        $department = Department::find($id);
        $department -> publication_status = 1;
        $department -> save();

        return redirect('/department/manage');

    }

    public function closedDepartment($id){
        $department = Department::find($id);
        $department -> publication_status = 0;
        $department -> save();

        return redirect('/department/manage');

    }

    public function deleteDepartment($id){
        $department = Department::find($id);
        $department -> delete();

        return redirect('department/manage');
    }




}
