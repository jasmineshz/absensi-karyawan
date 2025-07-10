<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seeder employee terintegrasi user
        User::factory()->count(5)->create()->each(function ($user) {
            $employee = Employee::factory()->make([
                'name' => $user->name,
                'email' => $user->email,
                'user_id' => $user->id,
            ]);
            $employee->save();
        });

        // Admin user & employee
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
        Employee::factory()->create([
            'name' => $admin->name,
            'email' => $admin->email,
            'user_id' => $admin->id,
            'employee_id' => 'EMP-ADMIN',
            'position' => 'Administrator',
            'department' => 'IT',
        ]);
    }
}
