<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestorController extends Controller
{
    public function index()
    {
        // Fetch all invenstion disclosures
        $investor = Investor::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('investor', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        DB::transaction(function() use($request) {
            $investor = Investor::create((array) $request->all());
        });

        return back()->with([
            'success' => 'Added successfully'
        ]);
    }
}
