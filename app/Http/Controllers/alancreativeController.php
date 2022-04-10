<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\detailbill;
use App\Models\Kategori;
use App\Models\ListProduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class alancreativeController extends Controller
{
    public function index()
    {
        $listproduk = ListProduk::orderBy('id', 'asc')->get();
        $kategori = Kategori::orderBy('id', 'asc')->get();
        $bill = bill::all();
        $detailbill = detailbill::orderBy('id', 'asc')->get();
        return view('alanpages', [
            'title' => 'AlanCreative',
            'listproduk' => $listproduk,
            'kategori' => $kategori,
            'bills' => $bill,
            'detailbills' => $detailbill,
        ]);
    }

    function bill()
    {
        $bill = bill::all();
        $detailbill = detailbill::orderBy('id', 'asc')->get();

        return view('bill', [
            'bills' => $bill,
            'detailbills' => $detailbill,
        ]);
    }
}
