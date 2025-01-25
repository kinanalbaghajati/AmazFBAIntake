<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);


        $permissions = ['boards', 'employees', 'vacations', 'attendances', 'overtime', 'salary-advance', 'bonuses', 'admins', 'roles', 'system-data'];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'admin']);
        }
        $numberNames = ['first', 'second', 'third'];

        // Insert three rows with JSON data for the 'text' column
        for ($i = 0; $i < 3; $i++) {
            DB::table('contents')->insert([
                'name' => $numberNames[$i],
                'text' => json_encode([
                    'en' => '', // English text
                    'ar' => '', // Arabic text
                ]),
            ]);
        }
    }
}
