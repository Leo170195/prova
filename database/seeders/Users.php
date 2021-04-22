<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Aulab",
            "email" => "aulab@aulab.it",
            "password" => bcrypt("12345678"),
            'verify' => true,
        ]);
    }
}
