<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = [
            'name'     => 'maru',
            'email'    => 'sai.vichet70@gmail.com',
            'password' => Hash::make('kaka')
        ];

        User::create($user1);
    }
}
