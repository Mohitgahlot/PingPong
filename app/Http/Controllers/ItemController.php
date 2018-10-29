<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getShakes(){
        return view('Items.shakes');
    }

    public function getSandwich(){
        return view('Items.sandwiches');
    }

    public function getAbout(){
        return view('aboutus');
    }
}
