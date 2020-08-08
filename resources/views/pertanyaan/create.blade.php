@extends('master')

@section('content')

    <div class="container">
        <div class="row justify-content-start mx-1" >
            <a href="{{route('pertanyaan.index')}}" class="btn btn-md btn-primary my-2 mr-3">back</a>
        </div>
        <div class="card rounded">
            <form action="{{route('pertanyaan.store')}}" method="POST" class="form-group px-5 py-4">
                @csrf
                <h3>Pertanyaan Baru</h3>
                <label for="" class="mt-4">Nama Pembuat</label>
                <select name="profil_id" id="" class="form-control">
                    <option value="#" selected disabled>none</option>
                    @foreach ($items as $item)
                        <option value="{{$item->id}}">{{$item->nama_lengkap}}</option>
                    @endforeach
                </select>
                <label for="" class="mt-4">Judul</label>
                <input type="text" class="form-control" name="judul">
                <label for="" class="mt-4">Isi</label>
                <textarea name="isi" id="" cols="20" rows="5" class="form-control"></textarea>
                <button class="btn btn-primary btn-md my-3 float-right">Submit</button>
            </form>

        </div>
            
            
        
    </div>
@endsection

