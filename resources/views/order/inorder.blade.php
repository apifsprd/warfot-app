@extends('layouts.main')

@section('content')
{{-- <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Incoming Order</h3>
          <p class="text-subtitle text-muted">
            Segera respon customer untuk tindak lanjut order
          </p>
        </div>
      </div>
    </div>
</div> --}}

<div class="page-content">
    <div class="card">
        <div class="card-header">
            <h3>Incoming Order</h3>
            <p class="text-subtitle text-muted">
                Segera respon customer untuk tindak lanjut order
              </p>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Status Pembayaran</th>
                        <th>Status Order</th>
                        <th>Nomor Transaksi</th>
                        <th>Nama Customer</th>
                        <th>Nomor WA</th>
                        <th>Tipe</th>
                        <th>Paket</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-info-circle-fill"></i> Detail</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Sudah dibayar</span>
                        </td>
                        <td>
                            <span class="badge bg-warning">Dalam proses</span>
                        </td>
                        <td>INV/1/20221021</td>
                        <td>Apif Supriadi</td>
                        <td>085185829874</td>
                        <td>Potret ditempat</td>
                        <td>Gold</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-info-circle-fill"></i> Detail</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Sudah dibayar</span>
                        </td>
                        <td>
                            
                        </td>
                        <td>INV/2/20221022</td>
                        <td>Apif Supriadi</td>
                        <td>085185829874</td>
                        <td>Potret ditempat</td>
                        <td>Silver</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-info-circle-fill"></i> Detail</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Sudah dibayar</span>
                        </td>
                        <td>
                            <span class="badge bg-success">Selesai</span>
                        </td>
                        <td>INV/3/20221023</td>
                        <td>Apif Supriadi</td>
                        <td>085185829874</td>
                        <td>Potret ditempat</td>
                        <td>Gold</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-info-circle-fill"></i> Detail</a>
                        </td>
                        <td>
                            <span class="badge bg-warning">Belum dibayar</span>
                        </td>
                        <td>
                            
                        </td>
                        <td>INV/4/20221024</td>
                        <td>Apif Supriadi</td>
                        <td>085185829874</td>
                        <td>Potret ditempat</td>
                        <td>Gold</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-info-circle-fill"></i> Detail</a>
                        </td>
                        <td>
                            <span class="badge bg-danger">Batal</span>
                        </td>
                        <td>
                            
                        </td>
                        <td>INV/5/20221025</td>
                        <td>Apif Supriadi</td>
                        <td>085185829874</td>
                        <td>Potret ditempat</td>
                        <td>Gold</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    

@endsection