<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        return redirect()->route('receipts.create');
    }

    public function create()
    {
        return view('receipts.create');
    }
}
