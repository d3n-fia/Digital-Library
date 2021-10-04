<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Deden',
            'email'=>'dfiairfani@gmail.com',
            'password'=>bcrypt('12345678'),
            'email_verified_at'=>now(),
        ]);

        $user->assignRole('Admin');


        $user=User::create([
            'name'=>'Zayyan',
            'email'=>'zayyan@gmail.com',
            'password'=>bcrypt('12345678'),
            'email_verified_at'=>now(),
        ]);

        $user->assignRole('user');
    }
}
