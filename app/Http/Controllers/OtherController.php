<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function tables(){
        return view('admin.other.tables');
    }
    
    public function forms(){
        return view('admin.other.forms');
    }
    
    public function panels(){
        return view('admin.other.panels');
    }
    
    public function buttons(){
        return view('admin.other.buttons');
    }
    
    public function notifications(){
        return view('admin.other.notifications');
    }
    
    public function typography(){
        return view('admin.other.typography');
    }
    
    public function icons(){
        return view('admin.other.icons');
    }
    
    public function grid(){
        return view('admin.other.grid');
    }
}
