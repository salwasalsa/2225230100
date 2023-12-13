@extends('layouts.master')

@section('content')  
<div class="bg-success p-2 text-dark bg-opacity-25">
<div class="bg-success p-2" style="--bs-bg-opacity: -25;">
    <div class="container">
        <div class="text-center">
        <h1>Data Minat Mahasiswa</h1>
        </div>
        <form action="/salwa/store" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="NIM" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" id="Kelas" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" id="Jenis Kelamin" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hobi</label>
                <input type="text" name="hobi" class="form-control" id="Jenis Kelamin" aria-describedby="emailHelp">
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="Save">
        </form>
    </div>
</div>
</div>  
@endsection