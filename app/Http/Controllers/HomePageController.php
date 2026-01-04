<?php

namespace App\Http\Controllers;

use App\Models\IconsModel;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $availableIcons = IconsModel::where('is_available', 1)->latest()->get();
        $unavailableIcons = IconsModel::where('is_available', 0)->latest()->paginate(12);

        return view("welcome", compact('availableIcons', 'unavailableIcons'));
    }
}
