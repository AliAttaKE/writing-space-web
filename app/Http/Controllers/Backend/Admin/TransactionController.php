<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // All transactions list
    public function index(Request $request)
    {
        $query = Transaction::with('user');
    
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
    
            $query->where(function($q) use ($search) {
                $q->where('userid', 'like', "%{$search}%")
                  ->orWhere('reference', 'like', "%{$search}%")
                  ->orWhere('amount', 'like', "%{$search}%")
                  ->orWhere('currency', 'like', "%{$search}%")
                  ->orWhere('status', 'like', "%{$search}%")
                  ->orWhereHas('user', function($userQuery) use ($search) {
                      $userQuery->where('name', 'like', "%{$search}%")
                               ->orWhere('email', 'like', "%{$search}%");
                  });
            });
        }
    
        $transactions = $query->latest()->paginate(15)->appends(['search' => $request->search]);
    
        return view('backend.admin.transaction.index', compact('transactions'));
    }
    
    // Show single transaction
    public function show($id)
    {
        $transaction = Transaction::with('user')->findOrFail($id);
        return view('backend.admin.transaction.show', compact('transaction'));
    }
}
