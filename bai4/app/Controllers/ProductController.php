<?php

namespace App\Controllers;

use App\Request;

class ProductController extends Controller
{
    public function create()
    {
        return $this->view('admin/products/add');
    }

    public function store(Request $request)
    {
        var_dump($request->getBody());
    }
}