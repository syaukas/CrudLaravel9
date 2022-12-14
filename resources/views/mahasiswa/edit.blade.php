@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

        <form action="/mahasiswa/{{$Mahasiswa->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$Mahasiswa->nim}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NAMA</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$Mahasiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NO HP</label>
                <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$Mahasiswa->no_hp}}">
            </div>
    
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($Mahasiswa->jenis_kelamin == "L") selected @endif>Laki Laki</option>
                <option value="P" @if($Mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                <textarea class="form-control" name="alamat" rows="10">{{$Mahasiswa->alamat}}</textarea><br>
            </div>

        <input type="submit" name="submit" class="btn btn-info" value="Update">
        </form>
    </div>
@endsection