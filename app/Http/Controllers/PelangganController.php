<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pelanggan;
use DB;
use Auth;

class PelangganController extends Controller
{
    public function getPelanggan()
    {
        // $frs = Pelanggan::where('id', Auth::user()->id)->get();
        $data = auth()->user();
        print_r ($data->name);
        print_r ($data->email);
        print_r ($data->description);
        print_r ($data->address);
        print_r ($data->phone);
    }
}
