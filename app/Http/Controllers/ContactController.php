<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function allContacts()
    {
        $users = User::all();

        return view('admin.allContacts', compact('users'));
    }
}
