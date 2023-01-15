<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;


class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([

            'title' => 'Criar migration',
            'description' => 'explicabo sit dolore esse qui ipsa nisi est expedita tempore.',
            'qtt_hours' => '4:00',
            'remaining_time' => '3:30',
            'category_id' => 1,
            'tag_id' => 1,
            'team_id' => 1,
            'project_id' => 1,
            'phase_id' => 1,
            'deadline' => '2023-01-15',
            'order' => 1,
        ],
        [
            'title' => 'Criar migration 2',
            'description' => 'explicabo sit dolore esse qui ipsa nisi est expedita tempore.',
            'qtt_hours' => '4:00',
            'remaining_time' => '3:30',
            'category_id' => 1,
            'tag_d' => 1,
            'team_id' => 2,
            'project_id' => 1,
            'phase_id' => 2,
            'deadline' => '2023-01-15',
            'order' => 1,
        ],
        [
            'title' => 'Criar migration 3',
            'description' => 'explicabo sit dolore esse qui ipsa nisi est expedita tempore.',
            'qtt_hours' => '4:00',
            'remaining_time' => '3:26',
            'category_id' => 1,
            'tag_id' => 1,
            'team_id' => 2,
            'project_id' => 1,
            'phase_id' => 2,
            'deadline' => '2023-01-15',
            'order' => 1,
        ],
        [
            'title' => 'Criar migration 4',
            'description' => 'explicabo sit dolore esse qui ipsa nisi est expedita tempore.',
            'qtt_hours' => '4:00',
            'remaining_time' => '3:26',
            'category_id' => 1,
            'tag_id' => 1,
            'team_id' => 2,
            'project_id' => 1,
            'phase_id' => 3,
            'deadline' => '2023-01-15',
            'order' => 1,
        ],
        [
            'title' => 'Criar migration 5',
            'description' => 'explicabo sit dolore esse qui ipsa nisi est expedita tempore.',
            'qtt_hours' => '4:00',
            'remaining_time' => '3:26',
            'category_id' => 1,
            'tag_id' => 2,
            'team_id' => 2,
            'project_id' => 1,
            'phase_id' => 4,
            'deadline' => '2023-01-15',
            'order' => 1,
        ],
        [
            'title' => 'Criar migration 6',
            'description' => 'explicabo sit dolore esse qui ipsa nisi est expedita tempore.',
            'qtt_hours' => '4:00',
            'remaining_time' => '3:26',
            'category_id' => 1,
            'tag_id' => 1,
            'team_id' => 2,
            'project_id' => 1,
            'phase_id' => 5,
            'deadline' => '2023-01-15',
            'order' => 1,
        ],    
    );
    }
}
