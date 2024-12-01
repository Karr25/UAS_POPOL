<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Poli;

class HomeController extends Controller
{
    public function index(){
        $antrian_sekarang = Antrian::pluck('no_antrian')->count();
        if(!$antrian_sekarang){
            $antrian_sekarang=0;
        }

        $polis = Poli::all();
        if(auth('web')->check()){
            $antrian_anda = Antrian::where('pasien_id', auth('web')->user()->id)->orderBy('created_at', 'DESC')->first();
        } else{
            $antrian_anda = null;
        }

        return view('home', [
            'antrian_sekarang'=>$antrian_sekarang,
            'antrian_anda'=>$antrian_anda,
            'polis'=>$polis,
        ]);
    }
}
