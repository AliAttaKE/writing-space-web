<?php

namespace Database\Seeders;

use App\Models\Deadline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $turnaroundTimes = [
            '8 Hours',
            '24 Hours',
            '48 Hours',
            '3 Days',
            '5 Days',
            '7 Days',
            '14 Days',
            '14+ Days',
        ];

        foreach($turnaroundTimes as $t){
            $deadline=Deadline::create([
                'title'=>$t
            ]);
        }
    }
}
