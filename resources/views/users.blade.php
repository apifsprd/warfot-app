@extends('layouts.main')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-header ">
            <div class="row justify-content-between">
            <div class="col-4">
                <h3>Users Management</h3>
            </div>
            <div class="col-4 text-end">
                <a href="" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle-fill"></i> User</a>
            </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="" class="badge bg-warning"><i class="bi bi-person-bounding-box"></i> Change Role</a>
                            <a href="" class="badge bg-danger"><i class="bi bi-unlock-fill"></i> Reset Password</a>
                        </td>
                        <td>Apif Supriadi</td>
                        <td>@apifsprd</td>
                        <td>Web Developer</td>
                    </tr>     
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection