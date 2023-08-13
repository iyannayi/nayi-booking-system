<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms= Rooms::latest();
        if(request('search')){
            $rooms->where('r_name', 'like', '%'.request('search').'%')
                ->orWhere('r_type', 'like', '%'.request('search').'%')
                ->orWhere('r_facility', 'like', '%'.request('search').'%');
        }

        return view('rooms.main', [
            'tittle' => 'Rooms',
            'rooms'=> $rooms->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create', [
            'tittle' => 'Create Rooms',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'r_name' => 'required|max:255',
            'r_type' => 'required|max:255',
            'r_capacity' => 'required|max:255',
            'r_facility' => 'required|max:255',
            'r_description' => 'required|max:255',
            'r_is_available' => 'required|max:255',
        ]);
        Rooms::create($validated);

        return redirect('/rooms')->with('success', 'Room has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $r_id)
    {
        return view('rooms.edit', [
            'tittle' => 'Edit Room'
        ])->with([
            'rooms'=> Rooms::find($r_id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $r_id)
    {
        $validated=$request->validate([
            'r_name' => 'required|max:255',
            'r_type' => 'required|max:255',
            'r_capacity' => 'required|max:255',
            'r_facility' => 'required|max:255',
            'r_description' => 'required|max:255',
            'r_is_available' => 'required|max:255',
        ]);
        Rooms::where('r_id', $r_id)->update($validated);
        return redirect('/rooms')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $r_id)
    {
        Rooms::destroy($r_id);
        return redirect('/rooms')->with('success', 'User has been deleted!');
    }
}
