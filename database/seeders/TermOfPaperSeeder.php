<?php

namespace Database\Seeders;

use App\Models\Term_of_paper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermOfPaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentTypes = [
            'Marketing Plan',
            'Annotated Bibliography',
            'Article Review',
            'Creative Writing',
            'Peer Reviewed Journal',
            'Poem',
            'White Paper',
            'Admission Essay',
            'Application Essay',
            'Journal Professional',
            'Corporate',
            'Power Point Presentation',
            'Resume',
            'Website Content',
            'Capstone Project',
            'Case Study',
            'Business Plan',
            'Essay',
            'Book Report',
            'Research Paper',
            'Dissertation or Thesis complete',
            'Only the Introduction chapter',
            'Only the Hypothesis chapter',
            'Only the Literature Review chapter',
            'Only the Methodology chapter',
            'Only the Conclusion chapter',
            'Multiple Chapters',
            'Research Proposal',
            'Book Review',
            'Business Proposal',
            'SWOT',
            'Other (explain in description)',
            'Other (not listed above)',
        ];

        foreach($documentTypes as $d){
            $term=Term_of_paper::create([
                'title'=>$d
            ]);
        }
    }
}
