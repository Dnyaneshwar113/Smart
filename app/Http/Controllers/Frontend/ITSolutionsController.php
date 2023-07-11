<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ITSolutionsController extends Controller
{
    public function index(){
        return view('frontend.iot-based-solutions');
        
    }
    public function blockchain(){
        return view('frontend.blockchain-based-solutions');
        
    }
    public function transaction(){
        return view('frontend.transaction-support-solutions');
        
    }
    public function dashboards(){
        return view('frontend.real-time-dashboards');
        
    }
    public function commercial(){
        return view('frontend.commercial-solutions');
        
    }
    public function knowledge(){
        return view('frontend.knowledge-portals');
        
    }
    public function mobileApp(){
        return view('frontend.mobile-applications');
        
    }
}
