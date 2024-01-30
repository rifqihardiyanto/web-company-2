<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Categorynews;
use App\Models\Contact;
use App\Models\Management;
use App\Models\News;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use function Ramsey\Uuid\v1;

class PublicController extends Controller
{
    public function home()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $late_post = News::orderBy('id', 'desc')->take(4)->get();
        $contact = Contact::first();
        return view('public.welcome', compact('sliders', 'categories', 'late_post', 'contact'));
    }
    public function about()
    {
        $about = About::first();
        $managements = Management::all();
        return view('public.about', compact('managements', 'about'));
    }
    public function category($id_kategori)
    {
        $category = Category::findOrFail($id_kategori);
        $product = Product::where('id_kategori', $id_kategori)->get();
        return view('public.category', compact('category', 'product'));
    }
    public function products()
    {
        $products = Product::all();
        return view('public.products', compact('products'));
    }

    public function product_detail($id)
    {
        $contact = Contact::first();
        $product = Product::with('category')->findOrFail($id);
        return view('public.product', compact('product', 'contact'));
    }
    public function contact()
    {
        $contact = Contact::first();
        return view('public.contact', compact('contact'));
    }
    public function news()
    {
        $news = News::paginate(5)->withQueryString();
        $late_post = News::orderBy('id', 'desc')->take(4)->get();
        return view('public.news', compact('news', 'late_post'));
    }

    public function single_news($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $late_post = News::orderBy('id', 'desc')->take(4)->get();
        return view('public.singlenews', compact('news', 'late_post'));
    }

    public function notfound() 
    { 
        return view('public.404'); 
    }
}
