@extends('layouts.main')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-6">
                    <h3>Profile</h3>
                </div>
                <div class="col-4 text-end">
                    {{-- <a href="" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle-fill"></i> Edit</a> --}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-5 text-center">
                    <img class="rounded img-thumbnail" src="/assets/images/faces/2.jpg" alt="" style="width: 50%">
                </div>
                <div class="col-7">
                    <div class="row py-3">
                        <div class="col-4">Nama Lengkap</div>
                        <div class="col-8">: Apif Supriadi</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">Nama Pengguna</div>
                        <div class="col-8">: @apfsprd</div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-4">Role</div>
                        <div class="col-8">: Web Developer</div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit profile</a>
                            <a href="" class="btn btn-primary"><i class="bi bi-shield-lock-fill"></i> Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection