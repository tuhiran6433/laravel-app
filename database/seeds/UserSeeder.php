<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@yopmail.com',
            'password' => Hash::make('123456789'),
            'is_admin' => 1
        ]);

        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@yopmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 0
        ]);
    }
}
