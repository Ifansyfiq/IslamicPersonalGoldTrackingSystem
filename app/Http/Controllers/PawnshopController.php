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
        return view('pawnshop.AddPawnshopPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePawnshopRequest $request)
    {
        Pawnshop::create([
            'arrahnu_type' => $request->arrahnu_type,
            'arrahnu_name' => $request->arrahnu_name,
            'margin' => $request->margin,
            'loan_duration' => $request->loan_duration,
            'agent_name' => $request->agent_name,
            'agent_contact_num' => $request->agent_contact_num,
            'email' => $request->email,
            'hotline' => $request->hotline,
            'address' => $request->address,
            'coordinate' => $request->coordinate,
            'operation_time' => $request->operation_time,
            'user_id' => auth()->user()->id,
            'safekeep_rate_id' => 1,
        ]);

        return redirect()->route('pawnshop.index');
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
        if ($pawnshop->user_id == auth()->user()->id) {
            return view('pawnshop.EditPawnshopPage', [
                'pawnshop' => $pawnshop,
            ]); 
        }
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

        return redirect()->route('pawnshop.index');
    }
}
