<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Destination;
use App\Models\DestinationFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::all();
        return view('admin.destination.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $q = DB::table('destination')->select(DB::raw('MAX(RIGHT(id,6)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        $data = City::all();
        return view('admin.destination.add', compact('data','kd'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Destination();
        // $data->id = $request->kd;

        $data->alamat = $request->alamat;
        if ($request->hasFile('thumbnails')) {
            $thumbnails=$request->file('thumbnails')->store('thumbnails');
            $data->thumbnails = $thumbnails;
        }
        $data->id = $request->id;
        $data->city_id = $request->city_id;
        $data->destination_name = $request->destination_name;
        $data->price = $request->price;
        

        $data->save();

        // foreach ($request->foto_detail as $key => $foto_detail) {
        //     $admin = new DestinationFoto();
        //     if ($admin->foto_detail = $foto_detail) {
        //         $newbaru= $foto_detail->store('foto_details');
        //     }
        //     $admin['foto_detail'] = $newbaru;
        //     $admin->id_destination = $request->kd;
        //     $admin->save();
        // }
        return redirect()->route('view-destination');
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
        $q = DB::table('destination')->select(DB::raw('MAX(RIGHT(id,6)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        $kota = City::all();
        $photo = Destination::findorFail($id);
        $data = Destination::find($id);
        return view('admin.destination.edit',compact('data','kota','photo','kd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Destination::find($id);
        $data->city_id = $request->city_id;
        $data->destination_name = $request->destination_name;
        $data->price = $request->price;
        
        $data->alamat = $request->alamat;
        if ($request->hasFile('thumbnails')) {
            $thumbnails=$request->file('thumbnails')->store('thumbnails');
            $data->thumbnails = $thumbnails;
        }
        $data->update();

        // if($request->hasFile("foto_detail")){
        //     foreach ($request->foto_detail as $key => $foto_detail) {
        //         $admin = new DestinationFoto();
        //         if ($admin->foto_detail = $foto_detail) {
        //             $newbaru= $foto_detail->store('foto_details');
        //         }
        //         $admin['foto_detail'] = $newbaru;
        //         $admin->id_destination = $request->kd;
        //         $admin->save();
        //     }
        // }
        
        return redirect()->route('view-destination');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Destination::find($id);
        $data->delete();
        if ($data->thumbnails != null || $data->thumbnails ='' ){
            Storage::delete($data->thumbnails);
        }
        return redirect()->route('view-destination');
    }
    public function delete(string $id)
    {
        $photo = DestinationFoto::find($id);
        $photo->delete();
        if ($photo->foto_detail != null || $photo->foto_detail ='' ){
            Storage::delete($photo->foto_detail);
        }
        return redirect()->back();
    }
}
