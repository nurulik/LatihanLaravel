@extends('layout.main')

@section('judul','Mahasiswa')
@section('isi')
<div class="container">
        <div class="row">
            <h1>Daftar Mahasiswa</h1>        
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <!-- @foreach ($mhs as $m)
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->jurusan}}</td>
                    <td>
                    <a href="" class="badge badge-success">Ubah</a>
                    <a href="" class="badge badge-danger">Hapus</a>
                    </td>
                    @endforeach -->
                    </tr>
                    <tr>
                </tbody>
                </table>
        </div>
    </div>
@endsection