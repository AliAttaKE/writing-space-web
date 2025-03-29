<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
public $receiver;
public $status;
public $order;
    /**
     * Create a new event instance.
     */
    public function __construct($receiver,$status,$order)
    {
        $this->receiver=$receiver;
        $this->status=$status;
        $this->order=$order;
    }

  
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
  {
      return ['pusher'];
  }

  public function broadcastAs()
  {
      return 'SendMessage';
  }
   

}
