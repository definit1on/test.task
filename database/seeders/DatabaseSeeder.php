<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        Company::create([
            'name' => 'Acme corp',
            'email' => 'help@acme.corp',
            'website' => 'www.acme.corp',
        ]);

        Employee::create([
            'first_name' => 'Herman',
            'last_name' => 'Karman',
            'email' => 'herman@acme.corp',
            'phone' => '380998887766'
        ]);
    }
}
