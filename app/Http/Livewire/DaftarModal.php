<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DaftarModal extends Component{
    public $no_identitas;
    public $nama;
    public $jenis_kelamin;
    public $tgl_lahir;
    public $alamat;
    public $no_telp;
    public $username;
    public $password;

    protected $rules = [
        'no_identitas'=>'required|numeric|digits:16',
        'nama'=>'required',
        'jenis_kelamin'=>'required',
        'tgl_lahir'=>'required',
        'alamat'=>'required',
        'no_telp'=>'required|min:10|max:13',
        'username'=>'required|min:3|unique:users',
        'password'=>'required',
    ];

    public function render(){
        return view('livewire.daftar-modal');
    }

    public function updated($field){
        $this->validateOnly($field);
    }

    public function submit(){
        $this->validate();

        User::create([
            'no_identitas'=>$this->no_identitas,
            'nama'=>$this->nama,
            'jenis_kelamin'=>$this->jenis_kelamin,
            'tgl_lahir'=>$this->tgl_lahir,
            'alamat'=>$this->alamat,
            'no_telp'=>$this->no_telp,
            'username'=>$this->username,
            'password'=>bcrypt($this->password),
        ]);
        
        return redirect('/')->with('daftarSukses', 'Pendaftaran berhasil');
    }
}
