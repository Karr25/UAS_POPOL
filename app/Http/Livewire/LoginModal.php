<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginModal extends Component{
    public $username;
    public $password;

    protected $rules = [
        'username'=>'required',
        'password'=>'required',
    ];

    public function render(){
        return view('livewire.login-modal');
    }

    public function updated($field){
        $this->validateOnly($field);
    }

    public function authenticate(){
        $credentials = $this->validate();

        if(Auth::guard('web')->attempt($credentials)) {
            session()->regenerate();
            return redirect('/')->with('loginSuccess', 'Login Berhasil');
        }

        $this->addError('loginFailed', 'Username atau Password salah');
        $this->username = '';
        $this->password = '';
    }

    public function logout(){
        Auth::guard('web')->logout();
        if(!Auth::guard('admin')->check()){
            session()->invalidate();
            session()->regenerateToken();
        }
        return redirect('/')->with('loggedOut', 'Anda telah Logout');
    }
}
