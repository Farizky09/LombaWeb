@extends('layouts.profile')
@section('c-profile')
{{-- <div class="container">
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
        <th>NO HP</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th> 
    </tr>
    @foreach ($siswa as $s)
    <tr>
         <td>{{ $s->id }}</td>
         <td>{{ $s->nis }}</td>
         <td>{{ $s->nama }}</td>
         <td>{{ $s->kelas }}</td>
         <td>{{ $s->no_hp }}</td>
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
</div> --}}

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
                <a href="/siswa/create"><button class="btn btn-primary float-end"> Tambah data</button></a>
                <h6>Data Siswa</h6>
          </div>    
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIS</th>                  
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kelas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO HP</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>                  
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="2">Aksi</th>                  
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                @foreach ($siswa as $s)
                <tbody>
                  <tr>
                    {{-- <td>
                      <div class="d-flex px-2 py-1">                      
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $s->id }}</h6>                          
                        </div>
                      </div>
                    </td> --}}
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $s->nama }}</p>                    
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">{{ $s->nis }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $s->kelas }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $s->jenis_kelamin }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $s->no_hp }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $s->alamat }}</span>
                    </td>
                    <td class="align-middle">
                        <a href="/siswa/{{ $s->id }}/edit" class="badge badge-sm bg-gradient-warning mx-1" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>                                                     
                    </td>
                    <td>
                        <form action="/siswa/{{ $s->id }}" method="POST">
                            @csrf
                           @method('delete')
                           <input class="mx-1" style="background-image: linear-gradient(310deg, #fb6340 0%, #fb4040 100%); --bs-badge-padding-x: 0.9em;
                           --bs-badge-padding-y: 0.55em;
                           --bs-badge-font-size: 0.75em;
                           --bs-badge-font-weight: 700;
                           --bs-badge-color: #fff;
                           --bs-badge-border-radius: 0.45rem;
                           display: inline-block;
                           padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
                           font-size: var(--bs-badge-font-size);
                           font-weight: var(--bs-badge-font-weight);
                           line-height: 1;
                           color: var(--bs-badge-color);
                           text-align: center;
                           white-space: nowrap;
                           vertical-align: baseline;
                           border-radius: var(--bs-badge-border-radius, 0);" type="submit" onclick="return confirm('apakah anda yakin ingin dihapus?')" value="Delete">
                       </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
