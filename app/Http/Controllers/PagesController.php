<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view("frontend.index");
    }

    public function about(){
        return view("frontend.about");
    }

    public function accommodation(){
        return view("frontend.accommodation");
    }

    public function amenities(){
        return view("frontend.amenities");
    }

    public function contacts(){
        return view("frontend.contacts");
    }

    public function endurance(){
        return view("frontend.endurance");
    }

    public function FAQs(){
        return view("frontend.FAQs");
    }

    public function flexibility(){
        return view("frontend.flexibility");
    }

    public function history(){
        return view("frontend.history");
    }

    public function ourathletes(){
        return view("frontend.ourathletes");
    }

    public function profiles(){
        return view("frontend.profiles");
    }

    public function rooms(){
        return view("frontend.rooms");
    }

    public function strength(){
        return view("frontend.strength");
    }

    public function training(){
        return view("frontend.training");
    }

    public function campsoverview(){
        return view("frontend.campsoverview");
    }

    public function trainingresources(){
        return view("frontend.trainingresources");
    }

    public function blog(){
        return view("frontend.blog");
    }

    public function community(){
        return view("frontend.community");
    }

    public function video(){
        return view("frontend.video");
    }

    public function adultcamp(){
        return view("frontend.adultcamp");
    }

    public function elite(){
        return view("frontend.elite");
    }

    public function juniorcamp(){
        return view("frontend.juniorcamp");
    }

    public function ourcoaches(){
        return view("frontend.ourcoaches");
    }

    public function packages(){
        return view("frontend.packages");
    }

    public function registered(){
        return view("frontend.registered");
    }

    public function register(){
        return view("frontend.register");
    }
}