@extends('layouts.profile')
@section('c-profile')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Merubah Ekstrakurikuler</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/ekskul/{{ $ekskul->id }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kode</label>
                                        <input type="text" class="form-control" name="kode"
                                            value="{{ $ekskul->kode }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan NIS">
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama
                                            Ekstrakurikuler</label>
                                        <input type="text" class="form-control" name="nama_ekskul"
                                            value="{{ $ekskul->nama_ekskul }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan NAMA">
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pembina</label>
                                        <input type="text" class="form-control" name="pembina"
                                            value="{{ $ekskul->pembina }}" id="exampleFormControlInput1"
                                            placeholder="Masukkan Kelas">
                                    </div>
                                    <input type="submit" class="btn btn-primary m-3" name="submit" value="simpan">
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
