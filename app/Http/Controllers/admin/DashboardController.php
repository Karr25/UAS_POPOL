<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Poli;
use Illuminate\Http\Request;

class DashboardController extends Controller{
    public function index(){
        $polis = Poli::all();

        return view('admin.dashboard-admin', [
            'title'=>'Dashboard',
            'polis'=>$polis,
        ]);
    }
}
