@extends('layouts.profile')
@section('c-profile')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Menambahkan Ekstrakurikuler</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/ekskul/store" method="POST">
                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kode</label>
                                        <input type="text" class="form-control" name="kode"
                                            id="exampleFormControlInput1" placeholder="Masukkan KODE" required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama
                                            Ekstrakurikuler</label>
                                        <input type="text" class="form-control" name="nama_ekskul"
                                            id="exampleFormControlInput1" placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pembina</label>
                                        <input type="text" class="form-control" name="pembina"
                                            id="exampleFormControlInput1" placeholder="Masukkan Pembina" required>
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

{{-- {{-- --}}
