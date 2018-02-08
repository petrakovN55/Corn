<?php

namespace App\Http\Controllers;

use App\Corn;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CornController extends Controller
{
    public function show () {
        $corns = Corn::all();
        return view('index',  [
            'corns'=>$corns
        ]);
    }

    public function addDeal() {
        return view( 'addDeal');
    }
}
