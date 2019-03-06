<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'superuser',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
