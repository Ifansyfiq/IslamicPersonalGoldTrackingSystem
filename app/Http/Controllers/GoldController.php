<?php

namespace App\Http\Controllers;

use App\Models\Gold;
use App\Http\Requests\StoreGoldRequest;
use App\Http\Requests\UpdateGoldRequest;
use Illuminate\Support\Facades\Auth;

class GoldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the current user's ID
        $userId = Auth::id();

        // Retrieve gold records for the current user
        $golds = Gold::where('user_id', $userId)->get();

        return view('gold.ViewGoldRecordPage', [
            'golds' => $golds,
        ]);   // Pass all gold records to the view

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gold $gold)
    {

        return view('gold.ViewGoldDetailsPage', [
            'gold' => $gold,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gold $gold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoldRequest $request, Gold $gold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gold $gold)
    {
        //
    }
}
