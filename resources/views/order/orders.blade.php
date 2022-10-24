@extends('layouts.main')

@section('content')
{{-- <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>All Order</h3>
          <p class="text-subtitle text-muted">
            Ubah status order setiap ada perubahan untuk mempermudah pembukuan
          </p>
        </div>
      </div>
    </div>
</div> --}}

<div class="page-content">
    <div class="card">
        <div class="card-header">
            <h3>All Orders</h3>
            <p class="text-subtitle text-muted">
            Ubah status order setiap ada perubahan untuk mempermudah pembukuan
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
                </tbody>
            </table>
        </div>
    </div>
</div>
    

@endsection