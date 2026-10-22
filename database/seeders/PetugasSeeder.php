<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            User::updateOrCreate(
                ['email' => "petugas{$i}@bpbd.test"],
                [
                    'name' => $faker->name(),
                    'password' => Hash::make('petugas123'),
                ]
            );
        }

        User::updateOrCreate(
            ['email' => 'admin@bpbd.bandung.go.id'],
            [
                'name' => 'Admin BPBD Kabupaten Bandung',
                'password' => Hash::make('Admin123!'),
            ]
        );
    }
}
