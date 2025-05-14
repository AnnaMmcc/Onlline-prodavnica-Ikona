<?php

namespace App\Http\Controllers;

use App\Models\IconsModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $allIcons = IconsModel::all();

        return view("shop", compact("allIcons"));
    }

    public function permalink(IconsModel $id)
    {
        return view("permalink", compact('id'));
    }
}
