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
            'safekeep_rate1' => $request->safekeep_rate1,
            'safekeep_rate2' => $request->safekeep_rate2,
            'safekeep_rate3' => $request->safekeep_rate3,
            'agent_name' => $request->agent_name,
            'agent_contact_num' => $request->agent_contact_num,
            'sun_start' => $request->sun_start,
            'sun_end' => $request->sun_end,
            'mon_start' => $request->mon_start,
            'mon_end' => $request->mon_end,
            'tue_start' => $request->tue_start,
            'tue_end' => $request->tue_end,
            'wed_start' => $request->wed_start,
            'wed_end' => $request->wed_end,
            'thu_start' => $request->thu_start,
            'thu_end' => $request->thu_end,
            'fri_start' => $request->fri_start,
            'fri_end' => $request->fri_end,
            'sat_start' => $request->sat_start,
            'sat_end' => $request->sat_end,
            'email' => $request->email,
            'hotline' => $request->hotline,
            'address' => $request->address,
            'coordinate' => $request->coordinate,
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
        if ($pawnshop->user_id == auth()->user()->id) {
            $pawnshop->update([
                'arrahnu_type' => $request->arrahnu_type,
                'arrahnu_name' => $request->arrahnu_name,
                'margin' => $request->margin,
                'loan_duration' => $request->loan_duration,
                'safekeep_rate1' => $request->safekeep_rate1,
                'safekeep_rate2' => $request->safekeep_rate2,
                'safekeep_rate3' => $request->safekeep_rate3,
                'agent_name' => $request->agent_name,
                'agent_contact_num' => $request->agent_contact_num,
                'sun_start' => $request->sun_start,
                'sun_end' => $request->sun_end,
                'mon_start' => $request->mon_start,
                'mon_end' => $request->mon_end,
                'tue_start' => $request->tue_start,
                'tue_end' => $request->tue_end,
                'wed_start' => $request->wed_start,
                'wed_end' => $request->wed_end,
                'thu_start' => $request->thu_start,
                'thu_end' => $request->thu_end,
                'fri_start' => $request->fri_start,
                'fri_end' => $request->fri_end,
                'sat_start' => $request->sat_start,
                'sat_end' => $request->sat_end,
                'email' => $request->email,
                'hotline' => $request->hotline,
                'address' => $request->address,
                'coordinate' => $request->coordinate,
            ]);
        }

        return redirect()->route('pawnshop.index');
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
