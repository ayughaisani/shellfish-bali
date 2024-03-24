<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Destination;
use App\Models\Wisata;
use App\Models\Dashboard2;
use App\Models\DestinationFoto;
use App\Models\SpecialOffer;
use App\Models\Transportation;
use Illuminate\Http\Request;
use Symfony\Component\Mailer\Transport;

class UserController extends Controller
{
    public function Transportation()
    {
        $data = Transportation::all();
        return view('user.transportation', compact('data'));
    }
    public function Detail_Transportation(string $id)
    {
        $data = Transportation::find($id);
        return view('user.detail-transportation', compact('data'));
    }

    public function Detail_Destination(string $id)
    {
        $data = Destination::find($id);
        return view('user.detail-destination', compact('data'));
    }
    public function Destination()
    {
        $data = Destination::all();
        return view('user.destination', compact('data'));
    }
    public function Special()
    {
        $data = SpecialOffer::all();
        
        return view('user.special', compact('data'));
    }
    public function wisatabali()
    {
        $data = Wisata::where('jenis',1)->get();
        return view('user.booking', compact('data'));
    }
    public function wisatabanyuwangi()
    {
        $data = Wisata::where('jenis',2)->get();
        return view('user.banyuwangi', compact('data'));
    }
}
