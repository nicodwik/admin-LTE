@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-start mx-1" >
            <a href="{{route('pertanyaan.index')}}" class="btn btn-md btn-primary my-2 mr-3">back</a>
        </div>
        <div class="card rounded">
            <div class="table-responsive">
                <div class="ml-4 py-4">
                    <h3>Detail Pertanyaan</h3>
                    <p>{{$item->judul}}</p>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>nama Pembuat</th>
                        <th>Isi</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Diupdate</th>
                    </tr>
                    <tr>
                        <td>{{$item->profil->nama_lengkap}}</td>
                        <td>{{$item->isi}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
@endsection
