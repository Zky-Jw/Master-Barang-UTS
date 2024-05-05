@extends('layouts.app')
@section('content')

<a href="{{route('barangs.create')}}" class="btn btn-primary">tambah</a>
<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Satuan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barang as $barangs )
        <tr>
            <td class="align-middle">{{ $barangs->kode_barang }}</td>
            <td class="align-middle">{{ $barangs->nama_barang }}</td>
            <td class="align-middle">{{ $barangs->harga_barang }}</td>
            <td class="align-middle">{{ $barangs->deskripsi_barang }}</td>
            <td class="align-middle">{{ $barangs->satuan->kode_satuan }}</td>
            <td>
                <a href="{{route('barangs.edit', $barangs->id)}}" type="button" class="btn btn-warning">Edit</a>
                <a href="{{route('barangs.show', $barangs->id)}}" type="button" class="btn btn-secondary">Detail</a>
                <form action="{{ route('barangs.destroy', $barangs->id) }}" method="POST" type="button" class="btn border-0 p-0" onsubmit="return confirm('Yakin Hapus Data ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger border-0">Hapus</button>
                </form>
            </td>
          </tr>
        @endforeach


    </tbody>
  </table>
@endsection
