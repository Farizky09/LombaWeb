@extends('layouts.profile')
@section('c-profile')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Memilih Ekstrakurikuler</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="/daftarEkskul/store" method="POST">
                                @csrf
                                <div class="m-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Ektrakurikuler</label>
                                    <select class="form-select" name="kode_ekstrakurikuler" aria-label="Default select example">
                                        @foreach ($ekskul as $s)
                                            <option value="{{ $s->kode }}">{{ $s->nama_ekskul }}</option>
                                        @endforeach
                                    </select>
                                    <div id="emailHelp" name="nama_ekskul" value="" class="form-text">Cuma bisa memilih satu ektrakurikuler.</div>
                                </div>
                                <button type="submit" class="btn btn-primary m-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
