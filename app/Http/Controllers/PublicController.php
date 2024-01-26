<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Categorynews;
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
        return view('public.welcome', compact('sliders', 'categories', 'late_post'));
    }
    public function about()
    {
        $managements = Management::all();
        return view('public.about', compact('managements'));
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
        $product = Product::with('category')->findOrFail($id);
        return view('public.product', compact('product'));
    }
    public function contact()
    {
        return view('public.contact');
    }
    public function news()
    {
        $news = News::paginate(5)->withQueryString();
        $late_post = News::orderBy('id', 'desc')->take(4)->get();
        $categorynews = Categorynews::all();
        return view('public.news', compact('news', 'categorynews', 'late_post'));
    }

    public function single_news($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $late_post = News::orderBy('id', 'desc')->take(4)->get();
        return view('public.singlenews', compact('news', 'late_post'));
    }
}
