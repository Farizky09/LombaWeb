@extends('layouts.profile')
@section('c-profile')
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIS</th>                  
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO HP</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>                  
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">                      
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">John Michael</h6>
                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">8937382</p>                    
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">XII RPL 1</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Laki-Laki</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">08223532526</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Tanggul</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-warning mx-1" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                    <a href="javascript:;" class="badge badge-sm bg-gradient-danger" data-toggle="tooltip" data-original-title="Edit user">
                      Delete
                    </a>
                  </td>
                </tr>
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

@endsection