<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Poli;
use App\Models\Antrian;

class AmbilAntrian extends Component{
    public $polis;
    public $no_antrian='';

    public $poli;

    public function mount(){
        $this->polis = Poli::all();
    }

    public function render(){
        return view('livewire.ambil-antrian', [
            'polis'=>$this->polis
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
            'poli'=>'required'
        ]);

        Antrian::create([
            'no_antrian'=>$this->no_antrian,
            'pasien_id'=>auth('web')->user()->id,
            'kode_poli'=>$this->poli,
        ]);

        return redirect('/')->with('antrianAdded', 'Antrian berhasil dibuat');
    }
}
