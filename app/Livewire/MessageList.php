<?php

namespace App\Livewire;

use App\Models\Inbox;
use App\Models\Message;
use App\Models\Orders;
use Livewire\Component;
use Livewire\WithPolling;
use Livewire\WithPagination;


class MessageList extends Component
{
    use WithPagination;
    public $perPage = 5;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    protected $queryString = [
    'search'   => ['except' => ''],
    'page'     => ['except' => 1],
    'perPage'  => ['except' => 5], // agar URL me perPage=5 to hide karega
    ];

    public function updatedSearch($value)
    {
        if ($value === '') {
            // reset pagination (so you show page 1)
            $this->resetPage();
            // (optional) you could also clear any other filters
        }
    }


    public function fetch_data()
    {
        $inbox = Inbox::all();
        $data = [];
        if ($inbox->count() > 0) {
            foreach ($inbox as $i) {
                $count = 0;
                $status = Orders::where('order_id', $i->order_id)->first();
                if ($status && $status->user_id === Auth()->user()->id) {
                    $i['order_status'] = $status->order_status;
                    $message = Message::where('order_id', $i->order_id)->get();
                    foreach ($message as $m) {
                        if ($m->receive_id === Auth()->user()->id) {
                            if ($m->status == 'UnRead') {
                                $count++;
                            }
                        }
                    }
                    $i['New_message'] = $count;
                    $data[] = $i;
                }
            }

            return view('livewire.message-list', compact('data'));
        }
    }
    public function mount()
    {
        $this->fetch_data();
    }
    // public function render()
    // {
    //     $inbox = Inbox::all();
    //     $data = [];
    //     if ($inbox->count() > 0) {
    //         foreach ($inbox as $i) {
    //             $count = 0;
    //             $status = Orders::where('order_id', $i->order_id)->first();
    //             if ($status && $status->user_id === Auth()->user()->id) {
    //                 $i['order_status'] = $status->order_status;
    //                 $message = Message::where('order_id', $i->order_id)->get();
    //                 foreach ($message as $m) {
    //                     if ($m->receive_id === Auth()->user()->id) {
    //                         if ($m->status == 'UnRead') {
    //                             $count++;
    //                         }
    //                     }
    //                 }
    //                 $i['New_message'] = $count;
    //                 $data[] = $i;
    //             }
    //         }
    //     }

    //     return view('livewire.message-list', compact('data'));
    // }

  public function render()
{
    $userId = auth()->id();

    $threads = Inbox::whereHas('order', fn($q) =>
                    $q->where('user_id', $userId)
                )
                ->when(function($q) {
                    $q->where('order_id', 'like', '%'.$this->search.'%')
                      ->orWhereHas('messages', fn($m) =>
                          $m->where('message', 'like', '%'.$this->search.'%')
                      );
                })
                ->withCount(['messages as unread_count' => fn($m) =>
                    $m->where('receive_id', $userId)
                      ->where('status', 'UnRead')
                ])
                ->orderBy('updated_at', 'desc')
                ->paginate($this->perPage)
                // ← yahan add karo:
                ->withPath(request()->url());

    return view('livewire.message-list', [
        'threads' => $threads,
    ]);
}


    public function updatingPerPage()
    {
        $this->resetPage();
    }


}
