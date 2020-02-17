@extends('layout.main')

@section('judul','About')
@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-20">
                <h1 class="mt-6">This website is {{$msg}}</h1>  
            </div>
        </div>
    </div>
@endsection
