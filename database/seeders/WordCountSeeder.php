<?php

namespace Database\Seeders;

use App\Models\WordCount;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WordCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $word = 300;
        
        while ($word <= 6000) {
            WordCount::create([
                'words' => $word
            ]);
            $word += 300;
        }
    }
}
