<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([

            'name' => 'Hardik',
        ]);
        Team::create([

            'name' => 'Hardik 2',
        ]);
        Team::create([

            'name' => 'Hardik 3',
        ]);
    }
}
