<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SSL_SpacesController extends Controller
{
    public function index()
    {
        return view('ssl-spaces.index');
    }
    public function features()
    {
        return view('ssl-spaces.features');
    }
    public function lern_grow()
    {
        return view('ssl-spaces.lern&grow');
    }
    public function gallery()
    {
        return view('ssl-spaces.gallery');
    }
    public function blog()
    {
        return  view('ssl-spaces.blogs');
    }
    public function blog_demo()
    {
        return view('ssl-spaces.blog-demo');
    }
    public function pricing()
    {
        return view('ssl-spaces.pricing');
    }
    public function partners()
    {
        return view('ssl-spaces.partners');
    }
    public function contact_us()
    {
        return view('ssl-spaces.contact_us');
    }
    public function login()
    {
        return view('ssl-spaces.login');
    }
    public function notfound()
    {
        return view('ssl-spaces.404');
    }
    public function HTTPerror()
    {
        return view('ssl-spaces.505');
    }
    // public function footer()
    // {
    //     return view('ssl-spaces.footer');
    // }
}
