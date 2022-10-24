@extends('layouts.main')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-header ">
            <div class="row justify-content-between">
            <div class="col-4">
                <h3>Master data Paket</h3>
            </div>
            <div class="col-4 text-end">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                data-bs-target="#inlineForm"><i class="bi bi-plus-circle-fill"></i> Paket</button>
            </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Jumlah Produk</th>
                        <th>Jumlah Photo</th>
                        <th>Editing Photo</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                        </td>
                        <td>Bronze</td>
                        <td>Rp. 20.000,-</td>
                        <td>
                            1 Produk                     
                        </td>
                        <td>3 Photo</td>
                        <td>Yes</td>
                        <td>JPG</td>
                    </tr>     
                    <tr>
                        <td>2</td>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                        </td>
                        <td>Silver</td>
                        <td>Rp. 35.000,-</td>
                        <td>
                            2 Produk                     
                        </td>
                        <td>6 Photo</td>
                        <td>Yes</td>
                        <td>JPG</td>
                    </tr>     
                    <tr>
                        <td>3</td>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                        </td>
                        <td>Gold</td>
                        <td>Rp. 50.000,-</td>
                        <td>
                            3 Produk                     
                        </td>
                        <td>10 Photo</td>
                        <td>Yes</td>
                        <td>JPG</td>
                    </tr>         
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- MODAL BOX --}}
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel33" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel33">Tambah Paket</h4>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <form action="#">
            <div class="modal-body">
                <label>Nama Paket </label>
                <div class="form-group">
                    <input type="text" placeholder="Paket"
                        class="form-control">
                </div>

                <label>Harga </label>
                <div class="form-group">
                    <input type="number" placeholder="Harga"
                        class="form-control">
                </div>

                <label>Jumlah Produk </label>
                <div class="form-group">
                    <input type="number" placeholder="Jumlah Produk"
                        class="form-control">
                </div>

                <label>Jumlah Photo </label>
                <div class="form-group">
                    <input type="number" placeholder="Jumlah Photo"
                        class="form-control">
                </div>

                <label>Editing Photo </label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" data-parsley-required="true"/>
                <label class="form-check-label form-label" for="flexRadioDefault1">
                    Ya
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"/>
                <label class="form-check-label form-label" for="flexRadioDefault2">
                    Tidak
                </label>
                </div>

                <label>File </label>
                <div class="form-group">
                    <input type="text" placeholder="Editing Photo"
                        class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">login</span>
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection