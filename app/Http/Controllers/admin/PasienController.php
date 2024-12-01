<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::orderBy('id', 'DESC')->paginate(10)->withQueryString();

        return view('admin.pasien-admin', [
            'title'=>'Data Pasien',
            'pasiens'=>$users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.pasien-admin-create', [
            'title'=>'Data Pasien',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'no_identitas'=>'required|numeric|digits:16',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required|min:10|max:13',
            'username'=>'required|min:3|unique:users',
            'password'=>'required',
        ]);

        User::create([
            'no_identitas'=>$request->no_identitas,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ]);

        switch ($request->input('action')) {
            case 'save':
                return back()->with('updated', 'Pasien added successfully');
                break;

            case 'go-back':
                return redirect('/admin/pasien')->with('updated', 'Pasien added successfully');
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user = User::where('id', $id)->first();

        return view('admin.pasien-admin-show', [
            'title'=>'Data Pasien',
            'pasien'=>$user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $user = User::where('id', $id)->first();

        return view('admin.pasien-admin-edit', [
            'title'=>'Data Pasien',
            'pasien'=>$user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $user = User::where('id', $id)->first();
        $request->validate([
            'no_identitas'=>'required|numeric|digits:16',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required|min:10|max:13',
            'username'=>'required|min:3' . ($request->username != $user->username ? '|unique:users' : ''),
            'password'=>'required',
        ]);

        $user->update([
            'no_identitas'=>$request->no_identitas,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ]);

        switch ($request->input('action')) {
            case 'save':
                return back()->with('updated', 'Pasien updated successfully');
                break;

            case 'go-back':
                return redirect('/admin/pasien')->with('updated', 'Pasien updated successfully');
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        User::where('id', $id)->delete();

        return back()->with('updated', 'Pasien deleted successfully');
    }
}
