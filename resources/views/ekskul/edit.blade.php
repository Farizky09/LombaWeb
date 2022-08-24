@extends('layouts.profile')
@section('c-profile')

<div class="container">
<form class="form-group" action="/ekskul/{{$ekskul->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode</label>
        <input type="text" class="form-control" name="kode" value="{{$ekskul->kode}}" id="exampleFormControlInput1" placeholder="Masukkan NIS" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Ekstrakurikuler</label>
        <input type="text" class="form-control" name="nama_ekskul" value="{{$ekskul->nama_ekskul}}" id="exampleFormControlInput1" placeholder="Masukkan NAMA">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pembina</label>
        <input type="text" class="form-control" name="pembina" value="{{$ekskul->pembina}}" id="exampleFormControlInput1" placeholder="Masukkan Kelas">
      </div>
    <input type="submit" class="btn btn-primary" name="submit" value="simpan">
</form>
</div>

@endsection