<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        //Ambil data database dari models
        $items = items::all();


        return view('home', compact('items'));
    }
}
