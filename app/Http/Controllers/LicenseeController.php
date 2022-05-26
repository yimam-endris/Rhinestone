<?php

namespace App\Http\Controllers;

use App\Models\Licensee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LicenseeController extends Controller
{
    public function index()
    {
        // Fetch all Licensor
        $licensee = Licensee::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('licensee', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        DB::transaction(function() use($request) {
            $licensee = Licensee::create((array) $request->all());
        });

        return back()->with([
            'success' => 'Added successfully'
        ]);
    }
}
