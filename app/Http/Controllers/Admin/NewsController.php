<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create(){
        return view('admin.news.create');
    }

    public function store(){

    }

    public function index(){

    }
}
