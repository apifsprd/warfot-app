@extends('layouts.main')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">

                <div class="col-6">
                    <h3>Master data metode pembayaran</h3>
                </div>
                <div class="col-4 text-end">
                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle-fill"></i> Paket</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Metode Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                        </td>
                        <td>Transfer Bank</td>                        
                    </tr>      
                    <tr>
                        <td>2</td>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                        </td>
                        <td>Transfer Ewallet</td>                        
                    </tr>                 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection