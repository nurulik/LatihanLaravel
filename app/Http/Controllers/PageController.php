<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view ('welcome');
    }

    public function about() {
        $msg = 'made by love~';
        return view ('about', ['msg'=> $msg]);
    }
}
