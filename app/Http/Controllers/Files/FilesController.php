<?php

namespace App\Http\Controllers\Files;

use Illuminate\Http\Request;

class FilesController extends Controller
{


    public function avatar()
    {

        return response()->download('storage/avatars/avatar/'.auth()->user()->avatar);
    }

}
