<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function route1(){
        return view('livewire.page1');
    }
    public function route2(){
        return view('livewire.page2');
    }
}
