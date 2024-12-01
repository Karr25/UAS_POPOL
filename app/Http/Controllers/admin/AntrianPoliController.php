<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Antrian;

class AntrianPoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $antrians = Antrian::orderBy('id', 'DESC')->paginate(10)->withQueryString();

        return view('admin.antrian-poli-admin', [
            'title'=>'Antrian Poli',
            'antrians'=>$antrians,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.antrian-poli-admin-create', [
            'title'=>'Antrian Poli',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $antrian = Antrian::where('id', $id)->first();

        return view('admin.antrian-poli-admin-show', [
            'title'=>'Antrian Poli',
            'antrian'=>$antrian,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
        $antrian = Antrian::where('id', $id)->uniqid();

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id){
        //
        $allowedStatuses = ['DIPROSES', 'TIDAK_DILAYANI', 'SELESAI_DILAYANI']; // Adjust based on your ENUM values

        // Validate incoming request
        $request->validate([
            'status' => 'required|string|in:' . implode(',', $allowedStatuses),
        ]);

        $antrian = Antrian::find($id);

        // Check if the record exists
        if (!$antrian) {
            return response()->json([
                'message' => 'Antrian not found',
            ], 404);
        }

        // Update the status
        $antrian->status = $request->status;
        $antrian->save();

        // Return a success response
        return response()->json([
            'message' => 'Status updated successfully',
            'data' => $antrian,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
