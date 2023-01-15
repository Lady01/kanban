<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phase;


class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phase::create([

            'name' => 'Aguardando',
            'description' => 'Qui commodi quia qui sequi voluptates cum nihil quia ad dignissimos esse est voluptas mollitia. Qui quaerat repellendus est praesentium doloribus sed perspiciatis voluptatem aut odio amet qui ducimus eligendi. Ut corrupti nisi et officiis illum sed galisum optio et obcaecati tempora aut incidunt animi. ',
        ]);
        Phase::create([

            'name' => 'Em andamento',
            'description' => 'Qui commodi quia qui sequi voluptates cum nihil quia ad dignissimos esse est voluptas mollitia. Qui quaerat repellendus est praesentium doloribus sed perspiciatis voluptatem aut odio amet qui ducimus eligendi. Ut corrupti nisi et officiis illum sed galisum optio et obcaecati tempora aut incidunt animi. ',
        ]);
        Phase::create([

            'name' => 'Pendência',
            'description' => 'Qui commodi quia qui sequi voluptates cum nihil quia ad dignissimos esse est voluptas mollitia. Qui quaerat repellendus est praesentium doloribus sed perspiciatis voluptatem aut odio amet qui ducimus eligendi. Ut corrupti nisi et officiis illum sed galisum optio et obcaecati tempora aut incidunt animi. ',
        ]);
        Phase::create([

            'name' => 'Finalizado',
            'description' => 'Qui commodi quia qui sequi voluptates cum nihil quia ad dignissimos esse est voluptas mollitia. Qui quaerat repellendus est praesentium doloribus sed perspiciatis voluptatem aut odio amet qui ducimus eligendi. Ut corrupti nisi et officiis illum sed galisum optio et obcaecati tempora aut incidunt animi. ',
        ]);
        Phase::create([

            'name' => 'Outros',
            'description' => 'Qui commodi quia qui sequi voluptates cum nihil quia ad dignissimos esse est voluptas mollitia. Qui quaerat repellendus est praesentium doloribus sed perspiciatis voluptatem aut odio amet qui ducimus eligendi. Ut corrupti nisi et officiis illum sed galisum optio et obcaecati tempora aut incidunt animi. ',
        ]);
    }
}
