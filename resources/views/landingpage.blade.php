@extends('layouts.main')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Landing Page Management</h3>
          <p class="text-subtitle text-muted">
            Disini kamu bisa ubah data konten yang ada pada Landing Page atau halaman depan yang diakses oleh pelanggan
          </p>
        </div>
      </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <div class="col">
        <div class="card">
            <div class="card-header"><h5 class="card-title">Tentang</h5></div>
            <div class="card-body">
            <div class="form-floating">
                <textarea
                class="form-control"
                placeholder="Tentang"
                id="tentang"
                >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione rerum ea officia inventore reprehenderit. Enim explicabo optio deleniti odio nihil tempora eos reprehenderit voluptates pariatur minus saepe in voluptatibus, expedita iste corrupti sit eligendi delectus cupiditate ratione dolorum ducimus eius ab aut! Quaerat reiciendis a consequuntur omnis magnam, aliquam quas!</textarea>
                <label for="tentang">Tentang</label>
            </div>
            <div class="row mt-3">
                <div class="col-12 d-flex justify-content-start">
                    <a href="" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h5>Galeri</h5>
                </div>
                <div class="col-4 text-end">
                    <a href="" class="btn btn-success btn-sm"><i class="bi bi-plus-circle-fill"></i> Gambar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Urutan ke</th>
                        <th>Nama Gambar</th>
                        <th>Preview</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                        </td>
                        <td>1</td>
                        <td>imagelandingpage.jpg</td>
                        <td>
                            <img
                            src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            style="width: 30%"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header row justify-content-between">
                <div class="col-4">
                    <h5>Klien</h5>
                </div>
                <div class="col-4 text-end">
                    <a href="" class="btn btn-success btn-sm"><i class="bi bi-plus-circle-fill"></i> Klien</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                            <th>Klien</th>
                            <th>Logo Klien</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                            </td>
                            <td>Atap Rumah Cafe</td>
                            <td>
                                <img
                                src="https://i.pinimg.com/originals/da/b9/d6/dab9d658345e3c665489b8996c080603.png"
                                style="width: 25%"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h5>Testimoni</h5>
                    </div>
                    <div class="col-4 text-end">
                        <a href="" class="btn btn-success btn-sm"><i class="bi bi-plus-circle-fill"></i> Testimoni</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                            <th>Klien</th>
                            <th>Testimoni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Hapus</a>
                            </td>
                            <td>Atap Rumah Cafe</td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime non vero voluptatem odit id tempora sunt aut explicabo cupiditate obcaecati?
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
    

@endsection