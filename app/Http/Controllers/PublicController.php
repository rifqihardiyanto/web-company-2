<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.welcome');
    }
    public function about()
    {
        return view('public.about');
    }
    public function products()
    {
        return view('public.products');
    }
    public function product()
    {
        return view('public.product');
    }
    public function contact()
    {
        return view('public.contact');
    }
    public function blog()
    {
        return view('public.blog');
    }
    public function blogs()
    {
        return view('public.blogs');
    }
}
