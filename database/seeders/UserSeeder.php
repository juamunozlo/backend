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
    public function run()
    {
        if (User::count() == 0) {

            User::factory()->create([
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'password' => bcrypt("admin"),
                'role' => 1
            ]);

            User::factory()->create([
                'name' => 'Customer',
                'email' => 'Customer@gmail.com',
                'password' => bcrypt("customer"),
                'role' => 2
            ]);
        }
    }
}
