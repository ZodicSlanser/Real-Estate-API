<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\House;
use App\Models\Owner;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = Owner::all();
        $owners->each(function ($owner) {
            House::factory()->count(5)->create([
                'owner_id' => $owner->id
            ]);
        });


    }
}
