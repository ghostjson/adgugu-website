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

        $user1 = new User();
        $user1->email = 'promoter@adgugu.com';
        $user1->password = bcrypt('17291234');
        $user1->first_name = 'Adgugu';
        $user1->last_name = 'Promoter';
        $user1->role = 'promoter';
        $user1->phone ='0000';
        $user1->save();

        $user2 = new User();
        $user2->email = 'shopper@adgugu.com';
        $user2->password = bcrypt('17291234');
        $user2->first_name = 'Adgugu';
        $user2->last_name = 'Shopper';
        $user2->role = 'shopper';
        $user2->phone ='0000';
        $user2->save();

    }
}
