@extends('layouts.alanheader')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8" id="list-produk">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            @foreach ($listproduk as $produk)
                                <button class="card col-3 p-0 my-2 mx-3" style="">
                                    <img class="card-img-top p-0 m-0" src="{{ Storage::url($produk->gambar) }}"
                                        alt="{{ $produk->nama }}" style="height: 80px">
                                    <div class="card-body p-0 m-auto overflow-hidden" style="height: 1.3rem">
                                        <h5 class="card-title ps-6">{{ $produk->nama }}
                                        </h5>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            @foreach ($kategori as $kat)
                                <button class="card col-9 p-0 my-2" style="">
                                    <img class="card-img-top p-0 m-0" src="{{ Storage::url($kat->gambar) }}"
                                        alt="{{ $kat->kategori }}" style="height: 80px">
                                    <div class="card-body p-0 m-auto overflow-hidden" style="height: 1.3rem">
                                        <h5 class="card-title ps-6">{{ $kat->kategori }}</h5>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($bills as $bill)
                <input id="totalbill" name="totalbill" value="{{ $bill->total }}" style="display: none">
            @endforeach
            <div class="col-md-4">
                <div class="row">
                    <iframe id="billFrame" name="billFrame" src="/bill" class="mx-0 px-0"
                        style="width:100%; height:29.60em"></iframe>
                </div>

                <div class="text-center">
                    <button class="btn my-0 py-0">Clear Sale</button>
                    <hr />
                </div>

                <div id="saveprintcharge"></div>
            </div>

        </div>
    </div>
@endsection
