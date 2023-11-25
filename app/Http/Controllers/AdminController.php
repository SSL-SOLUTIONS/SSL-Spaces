<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function pages_profile()
    {
        return view('admin.pages-profile');
    }
    public function pages_sign_in()
    {
        return view('admin.pages-sign-in');
    }
    public function pages_sign_up()
    {
        return view('admin.pages-sign-up');
    }
    public function feature()
    {
        return view('admin.features');
    }
    public function lern_grow()
    {
        return view('admin.lern_grow');
    }
    public function gallery()
    {
        return view('admin.gallery');
    }
    public function blog()
    {
        return view('admin.blogs');
    }
    public function pricing()
    {
        return view('admin.pricing');
    }
    public function charts()
    {
        return view('admin.charts');
    }
    public function map()
    {
        return view('admin.maps');
    }
}
