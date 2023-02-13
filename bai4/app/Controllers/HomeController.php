<?php

namespace App\Controllers;

use App\Models\BaseModel;
use App\Models\ProductModel;

class HomeController extends Controller{
    public function index(){
        $products = ProductModel::all();
        $this->view('home',['products'=>$products]);
    }

    public function contact(){
        $this->view('contact');
    }
}