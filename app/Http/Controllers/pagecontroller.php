<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //

    public function home()
    {
        $slider = Media::where('status', 1)->latest()->first();
        $slider2 = Media::all();
        $products = Media::where('status', 1)->latest()->take(9)->get();
        return view('pages.home', compact('slider', 'slider2', 'products'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function pufSandwich()
    {
        $category = Category::where('slug', 'like', '%puf%')->first();
        $media = $category ? Media::where('category_id', $category->id)->where('status', 1)->latest()->take(6)->get() : collect();
        return view('pages.services.puf', compact('media'));
    }

    public function metalRoofings()
    {
        $category = Category::where('slug', 'like', '%metal%')->first();
        $media = $category ? Media::where('category_id', $category->id)->where('status', 1)->latest()->take(6)->get() : collect();
        return view('pages.services.metal', compact('media'));
    }

    public function aluminiumAwnings()
    {
        return view('pages.services.aluminium');
    }

    public function tensileRoofings()
    {
        return view('pages.services.tensile');
    }

    public function polycarbonateRoofings()
    {
        return view('pages.services.polycarbonate');
    }

    public function terraceRoofings()
    {
        return view('pages.services.terrace');
    }

    public function projects()
    {
        $categories = Category::where('status', 1)->get();
        $media = Media::where('status', 1)->with('category')->latest()->get();
        return view('pages.projects', compact('categories', 'media'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
