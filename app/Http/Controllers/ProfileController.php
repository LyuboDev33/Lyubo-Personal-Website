<?php 

namespace App\Http\Controllers;

use Pecee\Http\Request;

class ProfileController  { 


    public function index() { 
        return view('welcome');
    }

    public function profileIndex () { 
        return view('projects');    
    }

    public function contactIndex () { 
        return view('contact');
    }

    public function serviceIndex () {
        return view('services');
    }

    public function aboutIndex () { 
       return view('about');
    }

    public function productIndex () { 
        return view('products');   
    }


}