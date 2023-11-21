<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use App\Http\Requests\StoreZakatRequest;
use App\Http\Requests\UpdateZakatRequest;
use App\Models\Gold;
use Illuminate\Support\Facades\Auth;

class ZakatController extends Controller
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

        return view('zakat.CalculateZakatPage', [
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
    public function store(StoreZakatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Zakat $zakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zakat $zakat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZakatRequest $request, Zakat $zakat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zakat $zakat)
    {
        //
    }
}
