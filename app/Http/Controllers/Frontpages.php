<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    //
    public function home(){
        $title = 'Mediplus Website';
        return view('home', compact('title'));
    }

    public function portofolio(){
        $title = "portfolio-details";
        return view('portfolio-details',compact("title"));
    }

    public function contact() {
        $title = "Contcat Us";
        return view('contact', compact('title'));
        
    }

    public function errorPage(){
        $title = "Error Page";
        return view('error404', compact('title'));
    }

    public function blog(){
        $title = "Blog Single";
        return view('blog-single', compact('title'));
    }

    public function doctors(){
        $title = "Doctors";
        return view('doctors', compact('title'));
    }

    public function  services(){
        $title = "Services";
        return view('services', compact('title'));
    }

    public function appointment(){
        $title = "Book Appointment";
        return view('bookAppointment', compact('title'));
    }

}
