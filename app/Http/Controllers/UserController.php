<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return view('main');
        $testimonials = Testimonials::all();
        return view ('main', compact('testimonials'));
    }
}
