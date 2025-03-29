<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'text' => 'Early Planner Perk',
                'cost' => 'Cost',
                'min' =>"2",
                'max' => "7",
                'duration_type'=>'Hours',
                'cost_per_page'=>50,
                'page_limit'=>'10',
            ],
            [
                'text' => 'Advance Advantage',
                'cost' => 'Cost',
                'min' =>"8",
                'max' => "23",
                'duration_type'=>'Hours',
                'cost_per_page'=>39,
                'page_limit'=>'10',
            ],
            [
                'text' => 'Quick Turnaround Deal',
                'cost' => 'Cost',
                'min' =>"1",
                'max' => "",
                'duration_type'=>'Day',
                'cost_per_page'=>35,
                'page_limit'=>'20',
            ],
            [
                'text' => 'Speedy Service Save',
                'cost' => 'Cost',
                'min' =>"2",
                'max' => "",
                'duration_type'=>'Days',
                'cost_per_page'=>30,
                'page_limit'=>'30',
            ],
            [
                'text' => 'Rapid Response Rate',
                'cost' => 'Cost',
                'min' =>"3",
                'max' => "4",
                'duration_type'=>'Days',
                'cost_per_page'=>26,
                'page_limit'=>'40',
            ],
            [
                'text' => 'Next-Day Necessity',
                'cost' => 'Cost',
                'min' =>"5",
                'max' => "6",
                'duration_type'=>'Days',
                'cost_per_page'=>22,
                'page_limit'=>'50',
            ],
            [
                'text' => 'Hourly Hero Rate',
                'cost' => 'Cost',
                'min' =>"7",
                'max' => "14",
                'duration_type'=>'Days',
                'cost_per_page'=>19,
                'page_limit'=>'140',
            ],
            [
                'text' => 'Instant Insight Investment',
                'cost' => 'Cost',
                'min' =>"15",
                'max' => "later",
                'duration_type'=>'Days',
                'cost_per_page'=>18,
                'page_limit'=>'No',
            ],
        ];
        foreach ($users as $userData) {
            $user = Pricing::create([
                'text' => $userData['text'],
                'cost' => $userData['cost'],
                'min' => $userData['min'],
                'max' => $userData['max'],
                'duration_type' => $userData['duration_type'],
                'cost_per_page' => $userData['cost_per_page'],
                'page_limit' => $userData['page_limit'],



            ]);
        }
    }
}
