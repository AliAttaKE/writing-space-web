<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPolling;
use Livewire\WithPagination;
class MessageBox extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $order_id;
    

    public function mount(){
        $data=Message::where('order_id',$this->order_id)->get();
        $message=[];
        if($data->count()>0){
            foreach($data as $m){
                if($m->receive_id){
                    $receiver=User::find($m->receive_id);
                    $m['receiver_name']=$receiver->name;
                    $m['receiver_avatar']=$receiver->avatar;
                    $m['receiver_role']=$receiver->role;
                }
                if($m->sender_id){
                    $sender=User::find($m->sender_id);
                    $m['sender_name']=$sender->name;
                    $m['sender_avatar']=$sender->avatar;
                    $m['sender_role']=$sender->role;
                }

                $message[]=$m;
            }
        }
        return view('livewire.message-box',compact('message'));
    }
    // public function render()
    // {
    //     $data=Message::where('order_id',$this->order_id)->get();
    //     $message=[];
    //     if($data->count()>0){
    //         foreach($data as $m){
    //             if($m->receive_id){
    //                 $receiver=User::find($m->receive_id);
    //                 $m['receiver_name']=$receiver->name;
    //                 $m['receiver_avatar']=$receiver->avatar;
    //                 $m['receiver_role']=$receiver->role;
    //             }
    //             if($m->sender_id){
    //                 $sender=User::find($m->sender_id);
    //                 $m['sender_name']=$sender->name;
    //                 $m['sender_avatar']=$sender->avatar;
    //                 $m['sender_role']=$sender->role;
    //             }

    //             $message[]=$m;
    //         }
    //     }
   
    //     return view('livewire.message-box',compact('message'));
    // }


    public function render()
    {
        $messages = Message::where('order_id', $this->order_id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        // Enhance messages with receiver and sender details
        $messages->transform(function ($message) {
            if ($message->receive_id) {
                $receiver = User::find($message->receive_id);
                $message->receiver_name = $receiver->name;
                $message->receiver_avatar = $receiver->avatar;
                $message->receiver_role = $receiver->role;
            }
            if ($message->sender_id) {
                $sender = User::find($message->sender_id);
                $message->sender_name = $sender->name;
                $message->sender_avatar = $sender->avatar;
                $message->sender_role = $sender->role;
            }
            return $message;
        });

        return view('livewire.message-box', compact('messages'));
    }

    public function sortByDate()
    {
       
        $data = Message::where('order_id', $this->order_id)
        ->orderBy('created_at', 'desc')
        ->get();
        $message=[];
        if($data->count()>0){
            foreach($data as $m){
                if($m->receive_id){
                    $receiver=User::find($m->receive_id);
                    $m['receiver_name']=$receiver->name;
                    $m['receiver_avatar']=$receiver->avatar;
                    $m['receiver_role']=$receiver->role;
                }
                if($m->sender_id){
                    $sender=User::find($m->sender_id);
                    $m['sender_name']=$sender->name;
                    $m['sender_avatar']=$sender->avatar;
                    $m['sender_role']=$sender->role;
                }

                $message[]=$m;
            }
        }
   
        return view('livewire.message-box',compact('message'));
    }
}
