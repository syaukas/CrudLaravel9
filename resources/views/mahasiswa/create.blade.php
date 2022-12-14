@extends('layouts.master')


@section('content')

    
    <div class="container">
        <h1>Create Data Mahasiswa</h1>
        <form action="/mahasiswa/store" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NO HP</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
        

                <select class="form-select" name="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select><br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                    <textarea class="form-control" name="alamat" rows="10"></textarea><br>
                </div>

            <input type="submit" name="submit" class="btn btn-info" value="save">
        </form>
    </div>
       
@endsection