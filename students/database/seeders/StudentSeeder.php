<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $location = ['hà nội', 'đà nẵng', 'hồ chí minh'];
        $rank = ['trung bình', 'khá', 'giỏi'];
        for($i = 1; $i <= 20; $i++) {
            $birthday = rand(1980,2000). '-'. rand(1,12).'-'.rand(1,30);
            $locationKey = rand(0,2);
            $locationStr = $location[$locationKey];
            $rankKey = rand(0,2);
            $rankStr = $rank[$rankKey];
            DB::table('students')->insert(
                ['name' => Str::random(10),
                    'birthday' => $birthday,
                    'gender' => rand(1,2),
                    'location' => $locationStr,
                    'description' => Str::random(10),
                    'score' => rand(1,10),
                    'rank' => $rankStr]
            );
        }

    }
}
