@extends('layouts.alanheader')
@section('content')
    <div id="bill" class="col-11">
        <div id="header-bill" class="d-flex justify-content-between mb-2">
            <h2 class="my-auto p-2 h-100 bg-primary"><i class="bi bi-person-circle"></i></h2>
            <h2 class="text-center p-2 bg-secondary my-auto  w-100 h-100">New Customer</h2>
            <h2 class="my-auto p-2 h-100 bg-primary"><i class="bi bi-list-ul"></i></h2>
        </div>
        <div class="">
            <h5 class="text-center ps-6" style="font-size: 1em">Dine in
                <a href="#">
                    <i class="bi bi-chevron-down"></i>
                </a>
            </h5>
            <hr>
        </div>
        <div class="row">
            <div class="col-7">
                <h5 class="text-primary" style="font-size: 1em">1</h5>
                @foreach ($detailbills as $db)
                    <p>{{ $db->nama }}</p>
                @endforeach
                <p>Sub Total:</p>
                <p>Total:</p>
            </div>
            <div class="col-1">
                <h5 style="font-size: 12px"><br></h5>
                @foreach ($detailbills as $db)
                    @if ($db->jumlah == 1)
                        <p><br></p>
                    @else
                        <p>x{{ $db->jumlah }}</p>
                    @endif
                @endforeach
            </div>

            <div class="col-4">
                <h5 class="text-primary" style="font-size: 1em">View Table</h5>
                @foreach ($detailbills as $db)
                    <p>Rp {{ $db->harga }}</p>
                @endforeach
                @foreach ($bills as $bill)
                    <p>Rp {{ $bill->subtotal }}</p>
                    <p>Rp {{ $bill->total }}</p>
                @endforeach
            </div>
            <hr>
        </div>
    </div>
@endsection