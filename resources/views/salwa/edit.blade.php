@extends('layouts.master')

@section('content') 
<div class="bg-success p-2 text-dark bg-opacity-50">
<div class="bg-success p-2" style="--bs-bg-opacity: -50;">
    <div class="container">
    <div class="text-center">
    <h1>Edit Data</h1>
    </div>

<form action="/salwa/{{$salwa->id}}" method="POST">
    @method('put')
    @csrf
    <div class="bg-success p-2 text-dark bg-opacity-25">
    <div class="bg-success p-2" style="--bs-bg-opacity: -25;">
        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$salwa->nama}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$salwa->nim}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$salwa->kelas}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$salwa->jenis_kelamin}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobi</label>
                    <input type="text" name="hobi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$salwa->hobi}}">
                </div>
                <input type="submit" name="submit" class="btn btn-info" value="Update">
        </form>
    </div>
    </div>
    </div> 
</div>
</div>   
@endsection