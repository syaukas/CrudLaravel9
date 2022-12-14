@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/mahasiswa/create">Add Mahasiswa</a>
        <table class="table table-hover">
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>NO HP</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach ($Mahasiswa as $m )
                <tr>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->no_hp}}</td>
                    <td>{{$m->jenis_kelamin}}</td>
                    <td>{{$m->alamat}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                            <form action="/mahasiswa/{{$m->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>    
            @endforeach
        </table>
    </div>  
@endsection
