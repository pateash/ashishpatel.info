<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{

    private $me='ashishpatel0720@gmail.com';

    public function index(){
        if($this->sendEmail())
            return ['message'=>'success'];
        else
            return ['message'=>'fail'];
    }

    public function sendEmail(){
        Mail::to($this->me)->send(new ContactMail(request()->all())); //we will create  a mail class
    }
}
