<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Mail\mailer;

class StudentController extends Controller
{
    //
    public function studentlist(){
        return view('studentlist');
    }
    public function studentdetails(){
        return view('studentdetails');
    }
    
    function createstudent(){
        return view('createstudent');
    }
    function createSubmit(Request $req){
        $this->validate($req,
             [
                "name"=>"required|regex:^[a-zA-Z\s\.\-]+$^",
                "id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                "dob"=>'required|date|before:'.now()->subYears(18)->toDateString(),//ALSO WORK WITH before:-18years
                "email"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})@student\.aiub\.edu+$/i",
                "phone"=>"required|regex:/^\+[8]{2}[0-9]{11}+$/i",
             ],
             [
                "name.required"=> "Please provide your name!!!",
                "name.regex"=> "Please provide your name properly!!!",
                "id.required"=> "Please provide your id!!!",
                "id.regex"=> "Please provide correct id like XX-XXXXX-X!!!",
                "dob.required"=> "Please provide your date of birth!!!",
                "dob.before"=> "Your age must be 18!!!",
                "email.required"=> "Please provide your email!!!",
                "email.regex"=> "Please provide correct email like XX-XXXXX-X@student.aiub.edu!!!",
                "phone.required"=> "Please provide your phone number!!!",
                "phone.regex"=> "Please provide correct phone number!!!"

             ]
        );

        $s1 = new Student();
        $s1->name = $req->name;
        $s1->sid = $req->id;
        $s1->dob = $req->dob;
        $s1->email = $req->email;
        $s1->phone = $req->phone;
        $s1->save();


        return "Submitted with valid value";
    }
    function mailer() {
        Mail::to(["specialistrahul@gmail.com"])->send(new mailer('Subject','Body'));
    }
}
