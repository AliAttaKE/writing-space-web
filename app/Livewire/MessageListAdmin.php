<?php

namespace App\Livewire;

use App\Models\Inbox;
use App\Models\Message;
use App\Models\Orders;
use Livewire\Component;
use Livewire\WithPolling;
class MessageListAdmin extends Component
{
    public function fetch_data(){
        $inbox=Inbox::all();
    $data=[];
    
    if($inbox->count()>0){
foreach($inbox as $i){
$count=0;
$status=Orders::where('order_id',$i->order_id)->first();



//$i['order_status']=$status->order_status;

$i['order_status'] = $status ? $status->order_status : 'Unknown';
$message=Message::where('order_id',$i->order_id)->get();
foreach($message as $m){
    if($m->receive_id === Auth()->user()->id){
       if($m->status == 'UnRead'){
        $count++;
      
       }
    }
 }
 $i['New_message']=$count;
$data[]=$i;
}
      
    }
    return view('livewire.message-list-admin',compact('data'));
        
    }




public function mount(){
   $this->fetch_data();
}

    public function render()
    {
        $inbox=Inbox::all();
        $data=[];
        
        if($inbox->count()>0){
foreach($inbox as $i){
    $count=0;
    $status=Orders::where('order_id',$i->order_id)->first();

   // $i['order_status']=$status->order_status;
  
   $i['order_status'] = $status ? $status->order_status : 'Unknown';
   $message=Message::where('order_id',$i->order_id)->get();
    foreach($message as $m){
        if($m->receive_id === Auth()->user()->id){
           if($m->status == 'UnRead'){
            $count++;
          
           }
        }
     }
     $i['New_message']=$count;
    $data[]=$i;
}
          
        }
        return view('livewire.message-list-admin',compact('data'));
    }
}
