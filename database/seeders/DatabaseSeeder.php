<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         $this->call(TeamSeeder::class);    
         $this->call(UserTeamsSeeder::class);  
         $this->call(PhaseSeeder::class); 
         $this->call(TagSeeder::class);    
         $this->call(CategorySeeder::class);    
         $this->call(TodoSeeder::class);    
   
    }
}
