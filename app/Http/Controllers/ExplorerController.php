<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function index()
    {
        return view('explore', [
            'users' => User::paginate(20)
        ]);
    }
}
