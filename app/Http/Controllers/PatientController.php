<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Session;
use Mail;

class PatientController extends Controller
{
    public function index(){
        return view('front-end.patient.patient-register');
    }

    public function patientRegister(Request $request){
        $patient = new Patient();
        $patient -> name = $request -> name;
        $patient -> email = $request -> email;
        $patient -> phone = $request -> phone;
        $patient -> password = bcrypt($request -> password);
        $patient -> address = $request -> address;
        $patient -> save();

        $patientId = $patient->id;
        Session::put('patientId',$patientId);
        Session::put('patientName',$patient->name);

        $email = $patient['email'];
        $messageData = ['email'=>$patient['email'],'name'=>$patient['name'],'code'=>base64_encode($patient['email'])];

        Mail::send('front-end.mails.confirmation-mail', $messageData, function($message) use ($email){
            $message->to($email);
            $message->subject('Medino Hospital Confirmation Mail');
        });

        return redirect('/doctor/appointment');

    }

    public function confirmAccount(){
        return view('front-end.mails.confirm-account');
    }

    public function appointmentForm(){
        $patient = Patient::find(Session::get('patientId'));
        return view('front-end.appointment.appointment-form',[
            'patient' => $patient
        ]);
    }


}
