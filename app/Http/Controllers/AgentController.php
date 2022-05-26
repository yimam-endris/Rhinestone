<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AgentController extends Controller
{
    public function index()
    {
        // Fetch all Licensor
        $agent = Agent::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('agent', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        DB::transaction(function() use($request) {
            $agent = Agent::create((array) $request->all());
        });

        return back()->with([
            'success' => 'Added successfully'
        ]);
    }
}
