<?php

namespace App\Http\Controllers;

use App\Models\Pawnshop;
use App\Http\Requests\StorePawnshopRequest;
use App\Http\Requests\UpdatePawnshopRequest;
use Illuminate\Support\Facades\Auth;
use Request;

class PawnshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allowedRoles = ['User', 'Admin', 'Super Admin']; // Define the allowed roles
        $currentUserRole = Auth::user()->roles->pluck('name')->toArray(); // Retrieve the current user's roles

        if (!empty(array_intersect($currentUserRole, $allowedRoles))) {

            // Retrieve the search query from the request
            $search = request('search');

            if (Request::get('sort') == 'margin_desc') {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->orderBy('margin', 'desc')
                    ->paginate(5);
            } else if (Request::get('sort') == 'margin_asc') {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->orderBy('margin', 'asc')
                    ->paginate(5);
            } else if (Request::get('sort') == 'newest') {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->orderBy('updated_at', 'desc')
                    ->paginate(5);
            } else {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->paginate(5);
            }

            return view('pawnshop.ViewPawnshopPage', [
                'pawnshops' => $pawnshops,
                'search' => $search,
            ]);
        } else if (in_array('Pawnshop Owner', $currentUserRole)) {
            // Get the current user's ID
            $userId = Auth::id();
            // Retrieve the search query from the request
            $search = request('search');

            if (Request::get('sort') == 'margin_desc') {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->where('user_id', $userId)
                    ->orderBy('margin', 'desc')
                    ->paginate(5);
            } else if (Request::get('sort') == 'margin_asc') {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->where('user_id', $userId)
                    ->orderBy('margin', 'asc')
                    ->paginate(5);
            } else if (Request::get('sort') == 'newest') {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->where('user_id', $userId)
                    ->orderBy('updated_at', 'desc')
                    ->paginate(5);
            } else {
                // Retrieve all gold records for the current user and paginate the results
                $pawnshops = Pawnshop::search(request(key: 'search'))
                    ->where('user_id', $userId)
                    ->paginate(5);
            }

            return view('pawnshop.ViewPawnshopPage', [
                'pawnshops' => $pawnshops,
                'search' => $search,
            ]);
        } else {
            return redirect()->away('https://example.com/default');
        }
    }

    public function website(Pawnshop $pawnshop)
    {
        // Retrieve the website_link attribute from the Pawnshop model
        $websiteLink = $pawnshop->website_link;

        // Check if website_link is not null before creating the redirect
        if ($websiteLink !== null) {
            return redirect()->away($websiteLink);
        } else {
            // Handle the case where website_link is null, provide a default URL, or perform another action
            // For example, redirect to a default URL or show an error message
            return redirect()->away('https://example.com/default');
        }
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
            'sun' => $request->sun,
            'mon' => $request->mon,
            'tue' => $request->tue,
            'wed' => $request->wed,
            'thu' => $request->thu,
            'fri' => $request->fri,
            'sat' => $request->sat,
            'email' => $request->email,
            'hotline' => $request->hotline,
            'address' => $request->address,
            'website_link' => $request->website_link,
            'user_id' => auth()->user()->id,
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
        $allowedRoles = ['Admin', 'Super Admin']; // Define the allowed roles
        $currentUserRole = Auth::user()->roles->pluck('name')->toArray(); // Retrieve the current user's roles

        if ($pawnshop->user_id == auth()->user()->id) {
            return view('pawnshop.EditPawnshopPage', [
                'pawnshop' => $pawnshop,
            ]);
        } else if (!empty(array_intersect($currentUserRole, $allowedRoles))) {
            return view('pawnshop.EditPawnshopPage', [
                'pawnshop' => $pawnshop,
            ]);
        } else {
            return redirect()->away('https://example.com/default');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePawnshopRequest $request, Pawnshop $pawnshop)
    {
        $allowedRoles = ['Admin', 'Super Admin']; // Define the allowed roles
        $currentUserRole = Auth::user()->roles->pluck('name')->toArray(); // Retrieve the current user's roles

        if ($pawnshop->user_id == auth()->user()->id || !empty(array_intersect($currentUserRole, $allowedRoles))) {
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
                'sun' => $request->sun,
                'mon' => $request->mon,
                'tue' => $request->tue,
                'wed' => $request->wed,
                'thu' => $request->thu,
                'fri' => $request->fri,
                'sat' => $request->sat,
                'email' => $request->email,
                'hotline' => $request->hotline,
                'address' => $request->address,
                'website_link' => $request->website_link,
            ]);
        }

        return redirect()->route('pawnshop.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pawnshop $pawnshop)
    {
        $allowedRoles = ['Admin', 'Super Admin']; // Define the allowed roles
        $currentUserRole = Auth::user()->roles->pluck('name')->toArray(); // Retrieve the current user's roles

        if ($pawnshop->user_id == auth()->user()->id || !empty(array_intersect($currentUserRole, $allowedRoles))) {
            $pawnshop->delete();
        }

        return redirect()->route('pawnshop.index');
    }
}
