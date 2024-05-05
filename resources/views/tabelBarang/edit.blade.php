@extends('layouts.app')

@section('content')
    <h1 class="mb-0">Edit Barang</h1>
    <hr />
    <form action="{{route('barangs.update', $barang->id)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="row mb-3">
        <div class="col">
            <input value="{{$barang->kode_barang}}" type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
        </div>
        <div class="col">
            <input value="{{$barang->nama_barang}}" type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
        </div>
    </div>
    <div class="col">
        <input value="{{$barang->harga_barang}}" type="text" name="harga_barang" class="form-control" placeholder="Harga Barang">
    </div>
    <div class="col">
        <input value="{{$barang->deskripsi_barang}}" type="text" name="deskripsi_barang" class="form-control" placeholder="Deskripsi Barang">
    </div>
    <div class="col-md-4">
        <label for="satuan_barang" class="form-label"></label>
        <select class="form-select" name="satuan_barang" id="satuan_barang" required>
            @php
                $selected = ''; if ($errors->any()) { $selected = old('satuan'); }
                else { $selected = $barang->satuan_barang_id; }
            @endphp
            @foreach ($satuan as $s)
                <option value="{{ $s->id }}" {{ $selected == $s->id ? 'selected' : '' }}>
                    {{ $s->kode_satuan . ' - ' . $s->nama_satuan }}</option>
            @endforeach
        </select>
          </div>
</div>
</div>
</div>
<div class="row">
    <div class="d-grid">
        <button class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
