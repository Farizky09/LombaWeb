@extends('layouts.profile')
@section('c-profile')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Menambahkan Data Siswa</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <form class="form-group" action="/siswa/store" method="POST">
                                @csrf
                                <div class="m-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIS</label>
                                    <input type="text" class="form-control" name="nis" id="exampleFormControlInput1"
                                        placeholder="Masukkan NIS" required>
                                </div>
                                <div class="m-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                        placeholder="Masukkan NAMA" required>
                                </div>
                                <div class="m-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1"
                                        placeholder="Masukkan Kelas" required>
                                </div>
                                <div class="m-3">
                                    <select name="jenis_kelamin" class="form-select" required>
                                        <option value="">Pilih jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="m-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                        placeholder="Masukkan email" required>
                                </div>
                                <div class="m-3">
                                    <label for="exampleFormControlInput1" class="form-label">NO HP</label>
                                    <input type="number" class="form-control" name="no_hp" id="exampleFormControlInput1"
                                        placeholder="Masukkan no hp" required>
                                </div>
                                <div class="m-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
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

    