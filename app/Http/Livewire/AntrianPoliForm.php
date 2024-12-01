<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Antrian;
use App\Models\Poli;
use App\Models\User;

class AntrianPoliForm extends Component{
    public $polis;
    public $pasiens;
    public $no_antrian='';

    public $poli;
    public $pasien;

    public function mount(){
        $this->polis = Poli::all();
        $this->pasiens = User::all();
    }

    public function render(){
        return view('livewire.antrian-poli-form', [
            'polis'=>$this->polis,
            'pasiens'=>$this->pasiens,
        ]);
    }

    public function updated($field){
        if($this->poli){
            $yea = Antrian::where('kode_poli', $this->poli)->pluck('no_antrian')->max();
            $this->no_antrian = $yea + 1;
        } else{
            $this->no_antrian = '';
        }
    }

    public function submitHandle(){
        $this->validate([
            'poli'=>'required',
            'pasien'=>'required'
        ]);

        $pasien = User::where('username', $this->pasien)->first();

        Antrian::create([
            'no_antrian'=>$this->no_antrian,
            'pasien_id'=>$pasien->id,
            'kode_poli'=>$this->poli,
        ]);

        $this->poli = '';
        $this->no_antrian = '';

        return redirect('/admin/antrian-poli')->with('updated', 'Antrian berhasil dibuat');
    }
}
