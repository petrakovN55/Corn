<?php

namespace App\Http\Controllers;

use App\Corn;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CornController extends Controller
{
    protected $redirectTo = '/welcome';
    public function show () {
        $corns = Corn::all();
//        echo $corns;
        return view('index',  [
            'corns'=>$corns
        ]);
    }
}
