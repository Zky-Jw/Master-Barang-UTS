@extends('layouts.app')
@section('content')
    <h1 class="mb-0">Detail Barang</h1>
    <hr />
    <div class="row mb-3">
        <div class="row mb-3">
            <div class="col">
                <input value="{{$barang->kode_barang}}" type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" readonly>
            </div>
            <div class="col">
                <input value="{{$barang->nama_barang}}" type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" readonly>
            </div>
        </div>
        <div class="col">
            <input value="{{$barang->harga_barang}}" type="text" name="harga_barang" class="form-control" placeholder="Harga Barang" readonly>
        </div>
        <div class="col-md-4">
            <label for="satuan_barang" class="form-label">Satuan</label>
            <input type="text" name="satuan_barang" value="{{ $barang->satuan->kode_satuan . ' - ' . $barang->satuan->nama_satuan }}"  class="form-control" id="satuan_barang" readonly>
          </div>
        <div class="col">
            <input value="{{$barang->deskripsi_barang}}" type="text" name="deskripsi_barang" class="form-control" placeholder="Deskripsi Barang" readonly>
        </div>
    </div>
    </div>

@endsection
