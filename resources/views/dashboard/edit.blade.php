@extends('layouts.profile')
@section('c-profile')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Merubah Profile</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/dashboard/{{ $siswa->id }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIS</label>
                                        <input type="number" class="form-control" name="nis"
                                            value="{{ $siswa->nis }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan NIS">
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="{{ $siswa->name }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan NAMA">
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                        <input type="text" class="form-control" name="kelas"
                                            value="{{ $siswa->kelas }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan Kelas">
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-select"
                                            value="{{ $siswa->jenis_kelamin }}">
                                            <option value="">Pilih jenis Kelamin</option>
                                            <option value="L" @if ($siswa->jenis_kelamin == 'L') selected @endif>
                                                Laki-laki</option>
                                            <option value="P"@if ($siswa->jenis_kelamin == 'P') selected @endif>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">No HP</label>
                                        <input type="number" class="form-control" name="no_hp"
                                            value="{{ $siswa->no_hp }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan No HP">
                                    </div>                                
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $siswa->email }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan Email" disabled>
                                    </div>                                
                                    <div class="m-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{ $siswa->alamat }}</textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary m-3" name="submit" value="Simpan">
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
