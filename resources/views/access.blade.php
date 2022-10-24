@extends('layouts.main')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-header ">
            <div class="row justify-content-between">
            <div class="col-4">
                <h3>Access Management</h3>
            </div>
            <div class="col-4 text-end">
                {{-- <a href="" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle-fill"></i> User</a> --}}
            </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card collapse-header">
            <div
                class="card-header"
                id="headingTwo"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
                role="button"
            >
                <span class="collapsed collapse-title">
                    Administrator
                </span>
            </div>
            <div
                id="collapseTwo"
                class="collapse pt-1"
                aria-labelledby="headingTwo"
                data-parent="#cardAccordion"
            >
                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item border-0">
                        <input
                        class="form-check-input me-1"
                        type="checkbox"
                        value=""
                        aria-label="..."
                        />
                        Cras justo odio
                    </li>
                </ul>
                </div>
            </div>
            </div>

            <div class="card collapse-header">
                <div
                    class="card-header"
                    id="headingTwo"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                    role="button"
                >
                    <span class="collapsed collapse-title">
                        Web Developer
                    </span>
                </div>
                <div
                    id="collapseThree"
                    class="collapse pt-1"
                    aria-labelledby="headingTwo"
                    data-parent="#cardAccordion"
                >
                    <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item border-0">
                            <input
                            class="form-check-input me-1"
                            type="checkbox"
                            value=""
                            aria-label="..."
                            />
                            Cras justo odio
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            
        </div>
    </div>
</div>
@endsection