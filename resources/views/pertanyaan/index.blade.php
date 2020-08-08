@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-end" >
            <a href="{{route('pertanyaan.create')}}" class="btn btn-md btn-primary my-2 mr-3"><i class="fa fa-plus"></i> Pertanyaan Baru</a>
        </div>
        <div class="card rounded">    
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>Judul</th>
                        <th class="text-right">Action</th>
                    </tr>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->judul}}</td>
                            <td class="text-right">
                                <a href="{{route('pertanyaan.show', $item->id)}}" class="btn btn-sm btn-primary">Details</a>
                                <a href="{{route('pertanyaan.edit', $item->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                                <form action="{{route('pertanyaan.destroy', $item->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection