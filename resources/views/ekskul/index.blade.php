@if(Auth::user()->role== 'admin')
@extends('layouts.profile')
@section('c-profile')
{{-- <div class="container">
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
</div> --}}

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
              <a href="/ekskul/create"><button class="btn btn-primary float-end">Tambah data</button></a>
              <h6>Data Ekstrakurikuler</h6>
        </div>    
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>                  
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Ekstrakurikuler</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pembina</th>                                         
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="2">Aksi</th>                  
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              @foreach ($ekskul as $s)
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
                    <p class="text-xs font-weight-bold mb-0 ps-3">{{ $s->id }}</p>                    
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">{{ $s->kode }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $s->nama_ekskul }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $s->pembina }}</span>
                  </td>                                 
                  <td class="align-middle text-center">
                    <form action="/ekskul/{{ $s->id }}" method="POST">
                          @csrf
                         @method('delete')
                         <input class="btn btn-danger btn-sm mx-1 mt-3" type="submit" onclick="return confirm('apakah anda yakin ingin dihapus?')" value="Delete">
                          <a href="/ekskul/{{ $s->id }}/edit" class="btn btn-warning btn-sm mx-1 mt-3" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>   
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
@endif