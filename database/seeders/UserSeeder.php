<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'admin@adgugu.com';
        $user->password = bcrypt('17291234');
        $user->first_name = 'Adgugu';
        $user->last_name = 'Admin';
        $user->role = 'advertiser';
        $user->phone ='0000';
        $user->save();

    }
}
