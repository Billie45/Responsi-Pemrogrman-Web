<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class ReportController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('product')->orderBy('created_at', 'desc')->get();
        return view('reports.index', compact('transactions'));
    }
}
