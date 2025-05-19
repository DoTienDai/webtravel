<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
      $category_parent = Category::where('category_parent',0)->get();
        return view('pages.home',compact('category_parent'));
    }
    public function tour($slug){
        return view('pages.tour');
    }
    public function detail_tour($slug){
        return view('pages.detail_tour');
    }

 
}
