@extends('layout.app')

@section('tittle','Anggota')

@section('content')
<setion class="section">
    <div class="section-header">
        <h4>Anggota</h4>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Anggota</h4>

            <div class="card-header-form">
                <a href="{{route('anggota.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
         </div>
     </div>

     <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10%">No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th style="width: 15%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($anggota as $agt)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$agt->kode}}</td>
                    <td>{{$agt->nama}}</td>
                    <td>{{$agt->jenis_kelamin}}</td>
                    <td>{{$agt->tempat_lahir}}</td>
                    <td>{{$agt->tanggal_lahir}}</td>
                    <td>{{$agt->telepon}}</td>
                    <td>{{$agt->alamat}}</td>
                    <td><img src="{{asset('/storage/anggota/'.$agt->foto)}}" class="rounded" style="width: 50px"></td>
                    <td>
                        <form action="/anggota/{{$agt->id}}" method="POST" id="delete-form">
                            @method('delete')
                            @csrf
                          <a href="/anggota/{{$agt->id}}/edit" class="btn btn-warning btn-sm">
                          <i class="fa fa-edit"></i></a>
                          <button class="btn btn-sm btn-danger fa fa-trash" onclick="confirmDelete()"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
     </div>
    </section>
   @endsection
