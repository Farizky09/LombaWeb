@extends('layouts.profile')
@section('c-profile')
    @if (Auth::user()->role == 'admin')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Siswa</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  NIS</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Ekstra yang diikuti</th>
                                            <th class="text-secondary opacity-7"></th>
                                          
                                        </tr>
                                    </thead>

                                    <tbody>
                                       @foreach ($ekstra as $eks)
                                       <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $eks->name }}</h6>
                                                   
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                          <div class="d-flex px-2 py-1">
                                              <div class="d-flex flex-column justify-content-center">
                                                  <h6 class="mb-0 text-sm">{{ $eks->nis }}</h6>
                                                 
                                              </div>
                                          </div>
                                      </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $eks->nama_ekskul }}</span>
                                        </td>                                        
                                    </tr>
                                       @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user()->role == 'siswa')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <a href="/dashboard/{{ $siswa->id }}/edit" class="btn btn-primary float-end"
                                data-toggle="tooltip" data-original-title="Edit user">
                                Lengkapi Data
                            </a>
                            <h6>Profile</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tr>
                                        <th class="p-4 text-uppercase">Nis :</th>
                                        <td>{{ $siswa->nis }}</td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">nama :</th>
                                        <td>{{ $siswa->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">kelas :</th>
                                        <td class="text-uppercase">{{ $siswa->kelas }}</td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">jenis kelamin :</th>
                                        <td>{{ $siswa->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">no hp :</th>
                                        <td>{{ $siswa->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">ekstrakurikuler :</th>
                                        <td class="text-uppercase">
                                            @foreach ($ekskul as $eks)
                                                @if ($loop->index == count($ekskul) - 1)
                                                    {{ $eks->nama_ekskul }}
                                                @else
                                                    {{ $eks->nama_ekskul }},
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">email :</th>
                                        <td>{{ $siswa->email }}</td>
                                    </tr>
                                    <tr>
                                        <th class="p-4 text-uppercase">alamat :</th>
                                        <td class="text-uppercase">{{ $siswa->alamat }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
