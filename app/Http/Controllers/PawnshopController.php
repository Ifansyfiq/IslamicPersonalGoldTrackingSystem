<?php

namespace App\Http\Controllers;

use App\Models\Pawnshop;
use App\Http\Requests\StorePawnshopRequest;
use App\Http\Requests\UpdatePawnshopRequest;
use Illuminate\Support\Facades\Auth;

class PawnshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the current user's ID
        $userId = Auth::id();

        // Retrieve pawnshop records for the current user
        $pawnshops = Pawnshop::where('user_id', $userId)->get();
        
        return view('pawnshop.ViewPawnshopPage', [
            'pawnshops' => $pawnshops,
        ]);
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
    public function store(StorePawnshopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pawnshop $pawnshop)
    {
        return view('pawnshop.ViewPawnshopDetailsPage', [
            'pawnshop' => $pawnshop,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pawnshop $pawnshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePawnshopRequest $request, Pawnshop $pawnshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pawnshop $pawnshop)
    {
        if ($pawnshop->user_id == auth()->user()->id) {
            $pawnshop->delete();
        }

        return redirect()->route('gold.index');
    }
}
