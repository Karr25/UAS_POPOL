<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poli;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $polis = Poli::orderBy('id', 'DESC')->paginate(10)->withQueryString();

        return view('admin.poli-admin', [
            'title'=>'Poli',
            'polis'=>$polis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.poli-admin-create', [
            'title'=>'Poli'
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
            'kode_poli'=>'required|unique:polis',
            'nama_poli'=>'required',
            'jumlah'=>'required|numeric|max_digits:3',
        ]);

        Poli::create([
            'kode_poli'=>$request->kode_poli,
            'nama_poli'=>$request->nama_poli,
            'jumlah'=>$request->jumlah,
        ]);

        switch ($request->input('action')) {
            case 'save':
                return back()->with('updated', 'Poli added successfully');
                break;

            case 'go-back':
                return redirect('/admin/poli')->with('updated', 'Poli added successfully');
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $poli = Poli::where('id', $id)->first();
        return view('admin.poli-admin-edit', [
            'title'=>'Poli',
            'poli'=>$poli
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
        $poli = Poli::where('id', $id)->first();

        $request->validate([
            'kode_poli'=>'required' . ($request->kode_poli != $poli->kode_poli ? '|unique:polis' : ''),
            'nama_poli'=>'required',
            'jumlah'=>'required|numeric|max_digits:3',
        ]);

        $poli->update([
            'kode_poli'=>$request->kode_poli,
            'nama_poli'=>$request->nama_poli,
            'jumlah'=>$request->jumlah,
        ]);

        switch ($request->input('action')) {
            case 'save':
                return back()->with('updated', 'Poli updated successfully');
                break;

            case 'go-back':
                return redirect('/admin/poli')->with('updated', 'Poli updated successfully');
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
        Poli::where('id', $id)->delete();

        return back()->with('updated', 'Poli deleted successfully');
    }
}
