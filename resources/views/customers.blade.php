@extends('layouts.main')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h3>Data Pelanggan</h3>
                </div>
                <div class="col-4 text-end">
                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-send-fill"></i> Promo Email</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>
                            <input
                            type="checkbox"
                            id="checkbox1"
                            class="form-check-input"
                            checked
                          />
                        </th>
                        <th>Action</th>
                        <th>Nama Customer</th>
                        <th>Nomor WA</th>
                        <th>Email</th>
                        {{-- <th>Alamat</th> --}}
                        <th>Desa/Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten/Kota</th>
                        <th>Provinsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input
                                type="checkbox"
                                id="checkbox1"
                                class="form-check-input"
                                checked
                              />
                        </td>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-info-circle-fill"></i> Detail</a>
                        </td>
                        <td>Apif Supriadi</td>
                        <td>085185829874</td>
                        <td>afs.supriadi@gmail.com</td>
                        {{-- <td>Perum. Bumi Mentari B.17 RT.004 RW.002 Kampung Pekong</td> --}}
                        <td>Saga</td>
                        <td>Balaraja</td>
                        <td>Kab. Tangerang</td>
                        <td>Banten</td>
                    </tr>                   
                </tbody>
            </table>
        </div>
    </div>
</div>
    

@endsection