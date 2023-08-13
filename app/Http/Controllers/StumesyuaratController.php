<?php

namespace App\Http\Controllers;

use App\Models\Bookingrooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StumesyuaratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statusColors = [
            0 => ['color' => 'red', 'text' => 'Tak Lulus'],
            1 => ['color' => 'green', 'text' => 'Lulus'],
            2 => ['color' => 'orange', 'text' => 'Diproses'],
        ];

        $bookingrooms= Bookingrooms::latest()->with(['user', 'rooms']);

        // if (request('search')) {
        //     $bookingrooms->whereHas('user', function ($query) {
        //         $query->where('name', 'like', '%' . request('search') . '%');
        //     })->orWhereHas('rooms', function ($query) {
        //         $query->where('r_name', 'like', '%' . request('search') . '%');
        //     });
        // }

        // if (request('status') && in_array(request('status'), ['taklulus', 'lulus', 'diproses'])) {
        //     $status = array_search(request('status'), ['taklulus', 'lulus', 'diproses']);
        //     $bookingrooms->where('br_status', $status);
        // }

        return view('stumesyuarat.main', [
            'tittle' => 'Stu Mesyuarat',
            'bookingrooms'=> $bookingrooms->get(),
            'statusColors' => $statusColors,
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
    public function store(Request $request)
    {
        //
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
    public function edit( string $br_id)
    {
        $statusColors = [
            0 => ['color' => 'red', 'text' => 'Tak Lulus'],
            1 => ['color' => 'green', 'text' => 'Lulus'],
            2 => ['color' => 'orange', 'text' => 'Diproses'],
        ];

        $bookingrooms= Bookingrooms::with(['user', 'rooms'])->find($br_id);
        return view('stumesyuarat.kelulusan', [
            'tittle' => 'Kelulusan Mesyuarat',
            'bookingrooms'=>$bookingrooms,
            'statusColors' => $statusColors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $br_id)
    {
        $validated=$request->validate([
            'br_status' => 'required|max:255',
        ]);
        Bookingrooms::where('br_id', $br_id)
            ->update([
                'br_status' => $validated['br_status'],
        ]);
        //return redirect('/stumesyuarat')->with('success', 'Status has been updated!');
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
