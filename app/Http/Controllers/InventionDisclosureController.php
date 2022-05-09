<?php

namespace App\Http\Controllers;

use App\Models\InventionDisclosure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventionDisclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invenstion disclosures
        $inventionDisclosures = InventionDisclosure::all();

        $status = config('settings.invention_status');

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.invention-disclosures.index', compact('inventionDisclosures', 'status', 'attorneys', 'paralegals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function() use($request) {
            $inventionDisclosure = InventionDisclosure::create((array) $request->all());
        });

        return back()->with([
            'success' => 'Added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function show($inventionDisclosure)
    {
        $status = config('settings.invention_status');

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();

        return \view('portal.invention-disclosures.show', [
            'inventionDisclosure' => $inventionDisclosure,
            'status' => $status,
            'attorneys' => $attorneys,
            'paralegals' => $paralegals
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function edit(InventionDisclosure $inventionDisclosure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventionDisclosure $inventionDisclosure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventionDisclosure $inventionDisclosure)
    {
        //
    }

    public function open()
    {
        dd(1);
        return \view('portal.invention-disclosures.show');
    }
}
