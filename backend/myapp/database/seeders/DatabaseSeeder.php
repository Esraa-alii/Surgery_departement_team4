<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\OperationRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        OperationRoom::factory(20)->create();
        Appointment::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([

            UserSeeder::class,
            OperationsSeeder::class


        ]);
    }
}
