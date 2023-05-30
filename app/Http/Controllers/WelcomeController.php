<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

//    public function index() {
//        // return "Arif";
//        $man = [
//            '0' => [
//                'name' => 'Arif',
//                'add' => 'Sirajgonj',
//                'country' => 'Bangladesh',
//            ],
//            '1' => [
//                'name' => 'Puspo',
//                'add' => 'Sirajgonj',
//                'country' => 'Bangladesh',
//            ],
//        ];
////        return view('news', compact('man'));
////        return view('news', ['man'=>$man]);
//        return view('news')->with('man',$man);
////        return $man;
////        return view('new');
////        return view('news');
//    }

    public function index() {
        return view('frontEnd.home.homeContent');
    }
    
    public function home() {
        return view('frontEnd.home.homeContent');
    }
    
    public function about() {
        return view('frontEnd.about.aboutContent');
    }
    
     public function services() {
        return view('frontEnd.services.servicesContent');
    }
    
    public function portfolio() {
        return view('frontEnd.portfolio.portfolioContent');
    }
    
    public function blog() {
        return view('frontEnd.blog.blogContent');
    }
    
    public function contact() {
        return view('frontEnd.contact.contactContent');
    }


}
