<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Faker\Provider\fr_FR\PhoneNumber as Phone;

class CompagniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            [
                'nom_compagnie' => Faker::create()->company,
                'rue' => Faker::create()->streetName,
                'code_commune' => Faker::create()->numberBetween($min=1000, $max=9000),
                'num_porte' => Faker::create()->numberBetween($min=1, $max=400),
                'num_tel' => Faker::create()->phoneNumber,
                'email' => Faker::create()->email,
                'nom_contact' => Faker::create()->lastName,
                'prenom_contact' => Faker::create()->firstName,
                'image' => Faker::create()->imageUrl,
            ],
        ]);
    }
}
