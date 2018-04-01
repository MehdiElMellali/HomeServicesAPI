<?php

namespace App\Http\Controllers\Service;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontServiceController extends Controller
{
    public function Services() {
        $services =  Service::orderBy('id', 'desc')->take(3)->get();
        return view('home',compact('services'));
    }
    public function Service($id) {

        $service =  Service::find($id);
        return view('service',compact('service'));
    }
}
