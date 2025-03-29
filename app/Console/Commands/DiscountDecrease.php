<?php

namespace App\Console\Commands;

use App\Models\Promotion;
use App\Models\PromotionDiscount;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DiscountDecrease extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:discount-decrease';

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
        $currentDateTime = Carbon::now();
  Log::info('ok working decrease');
        
        $dateOnly = $currentDateTime->format('Y-m-d');
        $promotion = Promotion::where('status','Active')->get();
      if($promotion->count()>0){
            foreach($promotion as $p){
                if($p->start_date <=  $dateOnly){
                  $decrease=PromotionDiscount::where('promotion_id',$p->id)->first();
                  if(!$decrease){
                    PromotionDiscount::create([
                        'promotion_id'=>$p->id,
                        'start_date'=>$p->start_date,
                        'end_date'=>$p->end_date,
                        'decrease_date'=> $dateOnly
                    ]);
                    $p->discount=$p->discount - $p->decrease_everyday;
                    $p->save();
                  }else{
if($decrease->decrease_date <  $dateOnly){
    $decrease->decrease_date =   $dateOnly;
    $decrease->save();
    $p->discount=$p->discount - $p->decrease_everyday;
    $p->save();
}
                  }
                }
            }
      }
    }
}
