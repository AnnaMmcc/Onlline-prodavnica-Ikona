<?php

namespace App\Http\Controllers;

use App\Models\IconsModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $availableIcons = IconsModel::where('is_available', 1)->get();
        $unavailableIcons = IconsModel::where('is_available', 0)->get();

        return view("shop", compact('availableIcons', 'unavailableIcons'));
    }

    public function permalink(IconsModel $id)
    {
        return view("permalink", compact('id'));
    }
}
