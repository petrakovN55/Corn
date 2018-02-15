<?php

namespace App\Http\Controllers;

use App\Corn;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
class CornController extends Controller
{
    public function show () {
        $corns = Corn::all();
        return view('index',  [
            'corns' => $corns
        ]);
    }

    public function addDeal() {
//        $corns = DB::table('corn')->where('worker','Ломакин')->get();

        return view( 'addDeal');
    }

    public function addDeal_DB(Request $request) {
        //$date, $worker, $type, $buyer, $weight_ot, $weight_prin, $price_zak, $price_prod, $zak_na_summ, $realiz_na_summ, $trans_rash, $other, $marja, $close
        $name = $request -> input('corn');
        DB::insert('insert into corn (date, worker, type, buyer, weight_ot, weight_prin, price_zak, price_prod, zak_na_summ, realiz_na_summ, trans_rash, other, marja, close) values(?)',[$name]);

    }

}
