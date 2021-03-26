<?php

namespace App\Http\Livewire\Promoter;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Profile extends Component
{

    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $bio;
    public $interests = [];

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'phone' => 'required',
        'bio' => 'nullable',
        'interests' => 'nullable'
    ];

    public function submit(){
        $this->validate();

        $user = auth()->user();
        $user->first_name = $this->firstName;
        $user->last_name = $this->lastName;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->interests = $this->interests;
        $user->bio = $this->bio;

        try {
            $user->save();
            session()->flash('successMessage', 'Profile details are successfully updated');
        }catch (\Exception $exception){
            Log::error($exception);
            session()->flash('errorMessage', 'Something went wrong');
        }
    }

    public function mount()
    {
        $this->firstName = auth()->user()->first_name;
        $this->lastName = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->bio = auth()->user()->bio;
        $this->interests = auth()->user()->interests;

    }

    public function render()
    {
        return view('livewire.promoter.profile')->layout('layouts.promoter');
    }
}
