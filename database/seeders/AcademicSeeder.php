<?php

namespace Database\Seeders;

use App\Models\Academic_level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educationLevels = [
            'High School',
            'Collage Freshman',
            'Collage Sophomore',
            'Collage Junior',
            'Collage Senior',
            'Master',
            'Doctoral',
            'Corporate/Professional',
        ];

        foreach($educationLevels as $e){
            $level=Academic_level::create([
                'title'=>$e,
            ]);
        }
    }
}
