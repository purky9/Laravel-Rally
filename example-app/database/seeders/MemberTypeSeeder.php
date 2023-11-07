<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberTypeSeeder extends Seeder
{
    
    public function run()
    {
        $types = [
            ['name' => 'závodník','minSelections' => 1,'maxSelections' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'technik','minSelections' => 1,'maxSelections' =>3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'manažer','minSelections' => 1,'maxSelections' =>2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'spolujezdec','minSelections' => 1,'maxSelections' =>1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'fotograf','minSelections' => 0,'maxSelections' =>1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('member_types')->insert($types);
    }
}