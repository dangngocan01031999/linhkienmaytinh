<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Gọi trang tất cả sản phẩm
    public function index(){
        return view('pages.home');
    }
}
