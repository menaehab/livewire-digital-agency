<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class AdminLogin extends Component
{
    public $email;
    public $password;
    public $remember;
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'remember' => 'nullable',
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();

        if (! Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        Session::regenerate();
        return redirect()->route('admin.index');
    }

    public function render()
    {
        return view('livewire.admin.admin-login');
    }
}
