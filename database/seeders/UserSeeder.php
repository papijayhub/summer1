<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Jay Calamba',
                'email' => 'jaycalamba905@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Begula Beluga',
                'email' => 'tibagol@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Myname S. Eminem',
                'email' => 'eminem@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Bencio Figaro',
                'email' => 'bencio@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
