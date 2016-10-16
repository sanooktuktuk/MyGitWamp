<?php

namespace App\Http\Controllers\Pages;

//use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getIndex(){
      return 'this is the contact page!';
    }

    public function getMyDetails(){
      //using camel casing...laravel will automatically route this as my-details...weird but whatever
      return 'my contact details';
    }

    public function getWeirdShit(){
      return 'weird shit';
    }
}
