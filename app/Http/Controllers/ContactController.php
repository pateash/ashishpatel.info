<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function sendEmail(){
     //send mail

   return ['message'=>"success"];
   }
}
