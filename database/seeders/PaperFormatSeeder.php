<?php

namespace Database\Seeders;

use App\Models\Paper_Format;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaperFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citationStyles = [
            'None',
            'Let the writer choose',
            'MLA',
            'APA',
            'Turabian',
            'Huavard',
            'AMA',
            'Chicago',
            'BCE',
            'IEEE',
            'AIP',
            'ACS',
            'Bluebook',
            'Does Not Matter',
            'Other (Not Listed Above)',
        ];

        foreach($citationStyles as $c){
            $paper=Paper_Format::create([
                'title'=>$c
            ]);
        }
    }
}
