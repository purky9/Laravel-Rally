<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;
use App\Models\MemberType;
use Faker\Factory as Faker;

class TeamMemberSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        
        $memberTypeIds = MemberType::pluck('id')->toArray();

        
        for ($i = 0; $i < 100; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $memberTypeId = $faker->randomElement($memberTypeIds);

            TeamMember::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'member_type_id' => $memberTypeId,
            ]);
        }
    }
}
