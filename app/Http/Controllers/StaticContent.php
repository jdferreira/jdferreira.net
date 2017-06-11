<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContent extends Controller
{
    public function about() {
        return view('about');
    }
    
    public function research() {
        return view('research');
    }
    
    public function teaching() {
        return view('teaching');
    }
    
    public function masters() {
        return view('masters');
    }
}
