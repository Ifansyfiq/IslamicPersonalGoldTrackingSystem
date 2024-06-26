<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use App\Http\Requests\StoreZakatRequest;
use App\Http\Requests\UpdateZakatRequest;
use App\Models\Gold;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Retrieve gold records for the current user
        $golds = Gold::where('user_id', $user->id)->get();

        return view('zakat.CalculateZakatPage', [
            'user' => $user,
            'golds' => $golds,
        ]);
    }

    public function calculateTotalWear()
    {
        // Retrieve the sum of weights where status is "Own(Wear)"
        $totalWeightWear = Gold::where('status', 'Own(Wear)')
            ->where('user_id', Auth::user()->id)
            ->sum('weight');

        // Calculate the number of decimal places
        $decimalPlaces = strlen(substr(strrchr($totalWeightWear, "."), 1));

        // Format the weight based on the number of decimal places
        if ($decimalPlaces > 0) {
            $formattedWeight = rtrim(number_format($totalWeightWear, $decimalPlaces, '.', ''), '0');
        } else {
            $formattedWeight = rtrim(number_format($totalWeightWear, 0, '', ''), '0');
        }

        // Remove the decimal point if there are no decimal places
        $totalWeightWear = rtrim($formattedWeight, '.');

        return $totalWeightWear;
        // return view('zakat.CalculateZakatPage', ['totalWeightWear' => $totalWeightWear]);
    }

    public function calculateTotalKeep()
    {

        // Retrieve the sum of weights where status is "Own(Keep)"
        $totalWeightKeep = Gold::where('status', 'Own(Keep)')
            ->where('user_id', Auth::user()->id)
            ->sum('weight');

        // Calculate the number of decimal places
        $decimalPlaces = strlen(substr(strrchr($totalWeightKeep, "."), 1));

        // Format the weight based on the number of decimal places
        if ($decimalPlaces > 0) {
            $formattedWeight = rtrim(number_format($totalWeightKeep, $decimalPlaces, '.', ''), '0');
        } else {
            $formattedWeight = rtrim(number_format($totalWeightKeep, 0, '', ''), '0');
        }

        // Remove the decimal point if there are no decimal places
        $totalWeightKeep = rtrim($formattedWeight, '.');

        return $totalWeightKeep;
        // return view('zakat.CalculateZakatPage', ['totalWeightKeep' => $totalWeightKeep]);
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
