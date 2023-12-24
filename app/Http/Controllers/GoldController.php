<?php

namespace App\Http\Controllers;

use App\Models\Gold;
use App\Models\GoldType;
use App\Http\Requests\StoreGoldRequest;
use App\Http\Requests\UpdateGoldRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class GoldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the current user's ID
            $userId = Auth::id();

            // Paginate gold records for the current user with 10 records per page
            $golds = Gold::where('user_id', $userId)->paginate(10);

            return view('gold.ViewGoldRecordPage', [
                'golds' => $golds,
            ]);
        } else {
            // Handle the case where the user is not authenticated
            // Redirect to the login page or show an error message
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all gold types
        $goldTypes = GoldType::all();

        return view('gold.AddGoldRecordPage', [
            'goldTypes' => $goldTypes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoldRequest $request)
    {
        // Retrieve the gold type based on the selected gold_type_id
        $goldType = GoldType::findOrFail($request->gold_type_id);


        if ($request->hasFile('image_golds')) {
            $file = $request->file('image_golds');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/golds/', $filename);
        }

        //store a new post
        Gold::create([
            'gold_name' => $request->gold_name,
            'gold_purity' => $request->gold_purity,
            'weight' => $request->weight,
            'purchase_date' => $request->purchase_date,
            'purchase_time' => $request->purchase_time,
            'purchase_from' => $request->purchase_from,
            'status' => $request->status,
            'buy_price' => $request->buy_price,
            'sell_price' => $request->sell_price,
            'spread' => $request->spread,
            'gold_image' => $filename,
            'user_id' => auth()->user()->id,
            'goldtype_id' => $goldType->id, // Store the gold_type_id,
        ]);



        return redirect()->route('gold.index');
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
        if ($gold->user_id == auth()->user()->id) {
            return view('gold.EditGoldRecordPage', [
                'golds' => $gold,
            ]); // Pass the gold record to the view
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoldRequest $request, Gold $gold)
    {
        $updateInfo = $gold;

        if ($request->hasFile('image_golds')) {
            $file = $request->file('image_golds');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/golds/', $filename);

            // Update the gold image field in the database
            $gold['image_golds'] = $filename;

            // Delete the previous gold_image file if it exists
            if (!empty($updateInfo->gold_image)) {
                $previousFile = 'uploads/golds/' . $updateInfo->gold_image;
                if (File::exists($previousFile)) {
                    File::delete($previousFile);
                }
            }
        }

        if ($gold->user_id == auth()->user()->id) {
            $gold->update([
                'gold_name' => $request->gold_name,
                'gold_purity' => $request->gold_purity,
                'weight' => $request->weight,
                'purchase_date' => $request->purchase_date,
                'purchase_time' => $request->purchase_time,
                'purchase_from' => $request->purchase_from,
                'status' => $request->status,
                'buy_price' => $request->buy_price,
                'sell_price' => $request->sell_price,
                'spread' => $request->spread,
            ]);
        }

        return redirect()->route('gold.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gold $gold)
    {
        if ($gold->user_id == auth()->user()->id) {
            $gold->delete();
        }

        return redirect()->route('gold.index');
    }
}
