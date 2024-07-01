<?php

namespace App\Http\Controllers;

use App\Models\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpecialOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SpecialOffer::all();
        return view('admin.special.special', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.special.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new SpecialOffer();
        // $data->id = $request->kd;

        $data->promo = $request->promo;
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture')->store('special');
            $data->picture = $picture;
        }
        $data->id = $request->id;
        $data->city_id = $request->city_id;
        $data->nama = $request->nama;
        $data->lokasi = $request->lokasi;
        $data->keterangan = $request->keterangan;
        $data->harga = $request->harga;
        
        $data->save();
        return redirect()->route('specialoffers')->withSuccess('Data successfully added');
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
    public function edit(string $id)
    {
        $data = SpecialOffer::find($id);
        return view('admin.special.detail', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = SpecialOffer::find($id);
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture')->store('special');
            $data->picture = $picture;
        }
        $data->update();
        return redirect()->route('specialoffers')->withSuccess('Data successfully edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SpecialOffer::find($id);
        if ($data->picture != null || $data->picture ='' ){
            Storage::delete($data->picture);
        }
        $data->delete();
        return redirect()->route('specialoffers');
    }
}
