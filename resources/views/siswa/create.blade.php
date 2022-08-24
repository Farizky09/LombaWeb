@extends('layouts.profile')
@section('c-profile')
    <div class="container">
        <form class="form-group" action="/siswa/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="exampleFormControlInput1"
                    placeholder="Masukkan NIS">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                    placeholder="Masukkan NAMA">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1"
                    placeholder="Masukkan Kelas">
            </div>
            <div class="mb-3">
                <select name="jenis_kelamin" class="form-select">
                    <option value="">Pilih jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NO HP</label>
                <input type="number" class="form-control" name="no_hp" id="exampleFormControlInput1"
                    placeholder="Masukkan no">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="simpan">
        </form>
    </div>
@endsection
