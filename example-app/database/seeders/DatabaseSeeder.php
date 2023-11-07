<?php

namespace Database\Seeders;

use Database\Seeders\TeamMemberSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MemberTypeSeeder::class, 
            TeamMemberSeeder::class
        ]);
    }
}