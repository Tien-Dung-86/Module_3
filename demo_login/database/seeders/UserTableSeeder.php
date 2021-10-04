<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'zz@gmail.com';
        $user->name = 'zzz';
        $user->password = Hash::make('123');
        $user->save();

        $user = new User();
        $user->email = 'admin@gmail.com';
        $user->name = 'admin';
        $user->password = Hash::make('123');
        $user->save();
    }
}
