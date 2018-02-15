<?php

namespace App\Http\Controllers;

use App\Corn;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
class CornController extends Controller
{
    public function show () {
        $corns = Corn::all();
        return view('index',  [
            'corns' => $corns
        ]);
    }

    public function addDeal() {
        $corns = DB::table('corn')->where('worker','Ломакин')->get();

        return view( 'addDeal');
    }

}
