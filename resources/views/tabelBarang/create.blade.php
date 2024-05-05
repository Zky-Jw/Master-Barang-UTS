@extends('layouts.app')

@section('content')
    <h1 class="mb-0">Tambah Barang</h1>
    <hr />
    <form action="{{route('barangs.store')}}" method="POST">
        @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
        </div>
        <div class="col">
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
        </div>
    </div>
    <div class="col">
        <input type="text" name="harga_barang" class="form-control" placeholder="Harga Barang">
    </div>
    <div class="col">
        <input type="text" name="deskripsi_barang" class="form-control" placeholder="Deskripsi Barang">
    </div>
</div>
<div class="col-md-4">
    <label for="satuan_barang" class="form-label">Satuan</label>
    <select id="satuan_barang" name="satuan_barang" class="form-select" required>
        @foreach ($satuan as $s)
            <option value="{{ $s->id }}" {{ old('s') == $s->id ? 'selected' : '' }}>
                {{ $s->kode_satuan . ' - ' . $s->nama_satuan }}</option>
        @endforeach
    </select>
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
