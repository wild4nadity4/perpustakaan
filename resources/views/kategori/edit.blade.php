@extends('layout.app')

@section('title', 'Edit Kategori')

@section('content')

<section class="section">
   <div class="section-header">
    <h1>Edit Kategori</h1>
    </div>

<div class="section-body">
    <div class="card">
        <div class="card-header">
            <h4>Edit Kategori</h4>
</div>

<div class="card-body">
    <form action="/kategori/{{$kategori->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="kode">Kode</label>
        <input type="text" name="kode" class="form-control" value="{{$kategori->kode}}">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$kategori->nama}}">
    </div>

    <button class="btn btn-sm btn-warning" type="submit"><i class="fa fa-save"></i>Update</button>
    </form>
    </div>
   </div>
  </div>
 </section>
@endsection

