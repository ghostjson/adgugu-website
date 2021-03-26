<?php

namespace App\Http\Livewire\Main;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Register extends Component
{


    public $role;
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $password = '';
    public $confirmPassword = '';
    public $address = '';
    public $phone = '';

    private $rolesAllowed = ['advertiser', 'promoter', 'shopper'];

    public function mount()
    {
       $this->role = 'advertiser' ;
    }


    public function register()
    {
        $this->validate([
            'role' => ['required'],
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min::8'],
            'confirmPassword' => ['same:password'],
            'phone' => ['required']
        ]);

        try {

            if (!in_array($this->role, $this->rolesAllowed)) {
                $this->addError('error', 'Error in registration');
            }


            $user = User::create([
                'role' => $this->role,
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'phone' => $this->phone
            ]);

            Auth::login($user);
            return redirect()->route('home');

        } catch (\Exception $exception) {
            Log::error($exception);
            $this->addError('error', 'Error in registration, please try again');
        }


    }


    public function render()
    {
        return view('livewire.main.register')->layout('layouts.main');
    }
}
