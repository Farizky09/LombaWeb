@extends('layouts.profile')
@section('c-profile')

<div class="container">
<form class="form-group" action="/siswa/{{$siswa->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIS</label>
        <input type="text" class="form-control" name="nis" value="{{$siswa->nis}}" id="exampleFormControlInput1" placeholder="Masukkan NIS" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}" id="exampleFormControlInput1" placeholder="Masukkan NAMA">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kelas</label>
        <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}" id="exampleFormControlInput1" placeholder="Masukkan Kelas">
      </div>
      <div class="mb-3">
        <select name="jenis_kelamin" class="form-select" value="{{$siswa->jenis_kelamin}}" >
            <option value="">Pilih jenis Kelamin</option>
            <option value="L" @if($siswa->jenis_kelamin == "L") selected @endif>Laki-laki</option>
            <option value="P"@if($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No HP</label>
        <input type="number" class="form-control" name="no_hp" value="{{$siswa->no_hp}}" id="exampleFormControlInput1" placeholder="Masukkan No HP">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat"  id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
      </div>
    <input type="submit" class="btn btn-primary" name="submit" value="simpan">
</form>
</div>
@endsection