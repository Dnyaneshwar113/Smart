<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ITConsultingController extends Controller
{
    public function index(){
        return view('frontend.it-consulting');
        
    }
    public function energy_modelling_support(){
        return view('frontend.energy_modelling_support');
        
    }
   
   
}
