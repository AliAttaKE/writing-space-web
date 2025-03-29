<?php

namespace App\Exports;

use App\Models\Paper;
use Maatwebsite\Excel\Concerns\FromCollection;

class PaperExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Paper::all();
    }
    // public function collection()
    // {
    //     return Paper::query()
    //         ->select(
    //             'categories.name',
    //             'papers.subject_topic',
    //             'papers.paper_type',
    //             'papers.word_count',
    //             'papers.paper_title',
    //             'papers.status'
    //         )
    //         ->join('categories', 'papers.category_id', '=', 'categories.id')
    //         ->get();
    // }


}
