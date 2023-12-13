@extends('layouts.master')

@section('content')
<div class="bg-success p-2 text-dark bg-opacity-50">
<div class="bg-success p-2" style="--bs-bg-opacity: -50;">
    <div class="container"> 
    <div class="text-center">
    <h1>Data Minat Mahasiswa</h1>
    </div>
    <a class="btn btn-info" href="/salwa/create">Add Data(+)</a>
    <table  class="table table-success table-striped">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NIM</td>
            <td>Kelas</td>
            <td>Jenis Kelamin</td>
            <td>Hobi</td>
            <td>Aksi</td>
        </tr>
        @foreach($salwa as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->nama}}</td>
                <td>{{$s->nim}}</td>
                <td>{{$s->kelas}}</td>
                <td>{{$s->jenis_kelamin}}</td>
                <td>{{$s->hobi}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-success" href="/salwa/{{$s->id}}/edit">Edit</a>
                    <form action="/salwa/{{$s->id}}" method="POST">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                     </form>
                </div>
                </td>
            </tr>
        @endforeach
    </table> 
</div>
</div>
 @endsection
