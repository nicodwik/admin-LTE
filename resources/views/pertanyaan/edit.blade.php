@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-start mx-1" >
            <a href="{{route('pertanyaan.index')}}" class="btn btn-md btn-primary my-2 mr-3">back</a>
        </div>
        <div class="card rounded">
            <form action="{{route('pertanyaan.update', $item->id)}}" method="POST" class="form-group px-5 py-4">
                @method('PUT')
                @csrf
                <h3>Edit Pertanyaan</h3>
                <p>{{$item->judul}}</p>
                <label for="" class="mt-4">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{$item->judul}}">
                <label for="" class="mt-4">Isi</label>  
                <textarea name="isi" id="" cols="20" rows="5" class="form-control">{{$item->isi}}</textarea>
                <button class="btn btn-primary btn-md my-3 float-right">Submit</button>
            </form>

        </div>
            
            
        
    </div>
@endsection