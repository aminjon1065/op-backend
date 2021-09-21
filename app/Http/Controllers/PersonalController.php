<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $data = Personal::with('user')->with('department')->get();
        return response()->json($data, 200);
    }
}
