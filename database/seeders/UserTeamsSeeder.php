<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_teams')->insert(
            [
                [
                    'user_id'     => 1,
                    'team_id'    => 1,
                ],
                [
                    'user_id'     => 2,
                    'team_id'    => 1,
                ],
                [
                    'user_id'     => 3,
                    'team_id'    => 1,
                ],
                [
                'user_id'     => 4,
                    'team_id'    => 2,
                ],
                [
                'user_id'     => 5,
                'team_id'    => 2
                ]
            ]
        );
    }
}
