<?php

namespace App\Console\Commands;

use App\Models\Promotion;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PromotionOffer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:promotion-offer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $promotion = Promotion::where('status','Active')->get();
        Log::info('ok working');
      if($promotion->count()>0){
            foreach($promotion as $p){
                if($p->end_date.' 23:59:59' < Carbon::now()){
                    $p->status = 'InActive';
                    $p->save();
                }
            }
      }
    }
}
