<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AvatarsController extends Controller
{
    public function avatar($filename)
    {
        $path =  public_path() . '/avatars/' . $filename;
        return Response::download($path);
    }
}
