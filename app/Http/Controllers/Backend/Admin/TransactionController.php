<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // All transactions list
    public function index()
    {
        $transactions = Transaction::latest()->paginate(15);
        return view('backend.admin.transaction.index', compact('transactions'));
    }

    // Show single transaction
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('backend.admin.transaction.show', compact('transaction'));
    }
}
