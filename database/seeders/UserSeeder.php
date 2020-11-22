<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'name'=>'João',
            'email'=> 'joão@joão',
            'email_verified_at'=>now(),
            'password'=>'joao123',
            'remember_token'=>'joao123'
        ]);

        $user->create([
            'name'=>'Maria',
            'email'=> 'maria@maria',
            'email_verified_at'=>now(),
            'password'=>'maria123',
            'remember_token'=>'maria123'
        ]);
    }
}
