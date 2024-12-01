<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class PrintController extends Controller{
    public function index(){
        $antrian = Antrian::where('pasien_id', auth('web')->user()->id)->orderBy('created_at', 'DESC')->first();
        return view('print', [
            'antrian'=>$antrian
        ]);
    }
}
