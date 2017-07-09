<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth')->except(['index','about','portfolio','blog','contact']);
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $h_title = 'Home of Vincent Wong';
        $title = 'Hello,';
        $msg = 'I\'m Vince, a developer living in Vancouver, BC Canada';

        return view('home.index', compact(['title','msg','h_title']));

//        return view('home.index');
    }

    public function about()
    {
        $h_title = 'About Vincent Wong';
        $title = 'About';
        $msg = '<:::::]===(ಠ=ಠ)===[:::::>';

        return view('about.index', compact(['title','msg','h_title']));
    }
        public function portfolio()
    {
        $h_title = 'Portfolio of Vincent Wong';
        $title = 'Portfolio';
        $msg = 'A collection of my past projects';

        return view('portfolio.index', compact(['title','msg','h_title']));
    }
    public function contact()
    {
        $h_title = 'Contact Vincent Wong';
        $title = 'Contact';
        $msg = 'Email:  vincewong22@gmail.com';

        return view('contact.index', compact(['title','msg','h_title']));
    }

//    public function blog()
//    {
//        $h_title = 'Blog [Notes] of Vincent Wong';
//        $title = 'Blog [Notes]';
//        $msg = 'A collection of my notes.';
//
//        return view('blog.index', compact(['title','msg','h_title']));
//    }

}
