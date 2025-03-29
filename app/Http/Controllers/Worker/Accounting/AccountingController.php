<?php

namespace App\Http\Controllers\Worker\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Management\bonuspenalty\bounaspenalty;
use App\Models\Management\Accounts\Account;
use App\Models\User;
use App\Models\Worker\Accounting\Accounting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = $this->order_details(auth()->user()->id, [0, 1, 2, 3, 4], [0,1, 2, 3, 4, 5, 6, 7], 'refunded', date('m'), date('Y'));
        return view('worker.Accounting.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = base64_decode($id);
        $data = $this->order_details(auth()->user()->id, [0, 1, 2, 3, 4], [0,1, 2, 3, 4, 5, 6, 7], 'refunded', date('m', strtotime($date)), date('Y', strtotime($date)));
//       dd($data);
        return view('worker.Accounting.detail', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('worker/Accounting/edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function search(Request $request)
    {
        $data = $this->order_details(auth()->user()->id, [0, 1, 2, 3, 4], [0,1, 2, 3, 4, 5, 6, 7], 'refunded', $request->month, $request->year);
        return view('worker.Accounting.index', compact('data'));

    }

    public function order_details($user_id = 'all', $payment_status, $order_status, $others = null, $month, $year)
    {

        $payout['pending'] = null;
        $payout['bounaspenalty'] = null;
        $payout['completed'] = null;
        $payout['process'] = null;

        if ($user_id == 'all') {
            $user = User::all()->pluck('id');
            $where = Account::whereIn('user_id', $user);
            $bounas = bounaspenalty::whereIn('user_id', $user);

        } elseif (is_array($user_id)) {
            $where = Account::whereIn('user_id', $user_id);
            $bounas = bounaspenalty::whereIn('user_id', $user_id);

        } else {
            $user = $user_id;
            $where = Account::where('user_id', $user);
            $bounas = bounaspenalty::where('user_id', $user);

        }
        $refund_status = [4, 5, 6, 7];
        $accounts = $where->whereIn('payment_status', $payment_status)->whereIn('order_status', $order_status)
            ->whereMonth('created_at', $month)->whereYear('created_at', $year)->with('commission')
            ->orderBy('id')->get()->groupBy('commission_id');
        foreach ($accounts as $main) {
            unset($amount);
            $countorder = count($main);
            foreach ($main as $rolewise) {
                if ($rolewise->payment_status == 0 && !in_array($rolewise->order_status, $refund_status)) {
                    $pamount = $rolewise->pages * $rolewise->spacing * $rolewise->commission_rate;
                    $payout['pending'][$rolewise->commission->package_name][] = [
                        'amount' => $pamount,
                        'title' => $rolewise->title,
                        'order_id' => $rolewise->order_id,
                        'date' => $rolewise->created_at,
                    ];
                } elseif ($rolewise->payment_status == 1 && !in_array($rolewise->order_status, $refund_status)) {
                    $prcamount = $rolewise->pages * $rolewise->spacing * $rolewise->commission_rate;

                    $payout['process'][$rolewise->commission->package_name][] = [
                        'amount' => $prcamount,
                        'title' => $rolewise->title,
                        'order_id' => $rolewise->order_id,
                        'date' => $rolewise->created_at,
                    ];

                } elseif ($rolewise->payment_status == 2 || in_array($rolewise->order_status, $refund_status)) {
                    if (in_array($rolewise->order_status, $refund_status)) {
                        $ccamount = $rolewise->pages * $rolewise->spacing * $rolewise->commission_rate;
                        $payout['completed'][$rolewise->commission->package_name]['refunded'][] = [
                            'amount' => $ccamount,
                            'title' => $rolewise->title,
                            'order_id' => $rolewise->order_id,
                            'date' => $rolewise->created_at,

                        ];
                    } else {
                        $ccamount = $rolewise->pages * $rolewise->spacing * $rolewise->commission_rate;
                        $payout['completed'][$rolewise->commission->package_name]['normal'][] = [
                            'amount' => $ccamount,
                            'title' => $rolewise->title,
                            'order_id' => $rolewise->order_id,
                            'date' => $rolewise->created_at,
                        ];

                    }
                }
                $payout['bounaspenalty'] = $bounas->whereMonth('created_at', $month)->whereYear('created_at', $year)->with('commission')->get();
            }

        }
        return $payout;

    }

}

