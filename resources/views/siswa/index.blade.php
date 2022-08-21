  @extends('layouts.app')
  @section('content')
<div class="container">
    <div class="row">
    <div class="col-6">
        <h1>Data Siswa</h1>
    </div>
    <a href="/siswa/create"><button class="btn btn-primary float-end"> Tambah data</button></a>
<table class="table table-dark">
    <tr>
        <th># </th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th> 
    </tr>
    @foreach ($siswa as $s)
    <tr>
         <td>{{ $s->id }}</td>
         <td>{{ $s->nis }}</td>
         <td>{{ $s->nama }}</td>
         <td>{{ $s->kelas }}</td>
         <td>{{ $s->jenis_kelamin }}</td>
         <td>{{ $s->alamat }}</td>
         <td>
             <div class="btn-group" role="group" aria-label="Basic example">
                  <a class="btn btn-outline-warning" href="/siswa/{{ $s->id }}/edit">EDIT</a>
                 <form action="/siswa/{{ $s->id }}" method="POST">
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
