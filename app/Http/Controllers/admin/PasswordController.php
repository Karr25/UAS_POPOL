<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class PasswordController extends Controller{
    public function index(){
        return view('admin.password-admin', [
            'title'=>'Dashboard',
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'password'=>'required',
            'new_password'=>'required',
            'confirm_password'=>'required|same:new_password',
        ]);

        if(Hash::check($request->password, auth('admin')->user()->password)){
            Admin::where('id', auth('admin')->user()->id)
            ->update([
                'password' => bcrypt($request->new_password)
            ]);

            return back()->with('success', 'Password has been Changed');
        } else{
            return back()->with('error', 'Password Wrong');
        }
    }
}
