<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ['Portugal', 'Espanha', 'França', 'Polonia'];

        foreach ($countries as $country) {
            \DB::table('countries')->insert(['name' => $country, 'created_at' => now(), 'updated_at' => now()]);
        }
    }
}
