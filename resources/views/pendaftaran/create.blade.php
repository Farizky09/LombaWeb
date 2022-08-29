@extends('layouts.profile')
@section('c-profile')
    <div class="container">
        <form class="form-group" action="/pendaftaran/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="exampleFormControlInput1"
                    placeholder="Masukkan NIS" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                    placeholder="Masukkan name" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ekskul</label>
                <input type="text" class="form-control" name="ekskul" id="exampleFormControlInput1"
                    placeholder="Masukkan Kelas" required>
            </div>
            
            <input type="submit" class="btn btn-primary" name="submit" value="simpan">
        </form>
    </div>
@endsection
