<?php

namespace App\Http\Controllers;

use App\Models\IconsModel;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $LastIcons = IconsModel::latest()->take(6)->get();

        return view("welcome", compact('LastIcons'));
    }
}
