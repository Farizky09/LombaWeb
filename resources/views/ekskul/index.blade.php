@extends('layouts.profile')
@section('c-profile')
<div class="container">
  <div class="row">
  <div class="col-6">
      <h1>Data </h1>
      <h2>{{count($ekskul)}}</h2>
  </div>
  <a href="/ekskul/create"><button class="btn btn-primary float-end"> Tambah data</button></a>
<table class="table table-dark">
  <tr>
      <th># </th>
      <th>Kode</th>
      <th>Nama Ekstrakurikuler</th>
      <th>pembina</th>
     
      <th colspan="2">Aksi</th> 
  </tr>
  @foreach ($ekskul as $s)
  <tr>
       <td>{{ $s->id }}</td>
       <td>{{ $s->kode }}</td>
       <td>{{ $s->nama_ekskul }}</td>
       <td>{{ $s->pembina }}</td>
       
       <td>
           <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-outline-warning" href="/ekskul/{{ $s->id }}/edit">EDIT</a>
               <form action="/ekskul/{{ $s->id }}" method="POST">
                     @csrf
                    @method('delete')
                    <input class="btn btn-outline-danger" type="submit" onclick="return confirm('apakah anda yakin ingin dihapus?')" value="Delete">
                </form>
           </div>
       </td>
  </tr>
@endforeach
</table>
</div>
</div>




@endsection
