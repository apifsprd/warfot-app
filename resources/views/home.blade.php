@extends('layouts.main')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          {{-- <h3>Vertical Layout with Navbar</h3>
          <p class="text-subtitle text-muted">
            Navbar will appear on the top of the page.
          </p> --}}
        </div>
      </div>
    </div>
</div>

    <div class="page-content">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center"
                    >
                    <div class="stats-icon red mb-2">
                        <i class="iconly-boldNotification"></i>
                    </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                        Incoming Order
                    </h6>
                    <h6 class="font-extrabold mb-0">10</h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center"
                    >
                    <div class="stats-icon blue mb-2">
                        <i class="iconly-boldTime-Circle"></i>
                    </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                        Inprocess Order
                    </h6>
                    <h6 class="font-extrabold mb-0">5</h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center"
                    >
                    <div class="stats-icon green mb-2">
                        <i class="iconly-boldActivity"></i>
                    </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                        Total Order
                    </h6>
                    <h6 class="font-extrabold mb-0">142</h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center"
                    >
                    <div class="stats-icon green mb-2">
                        <i class="iconly-boldAdd-User"></i>
                    </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                        Total Client
                    </h6>
                    <h6 class="font-extrabold mb-0">100</h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Order by Month</h4>
                    </div>
                    <div class="card-body">
                        <div id="line"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Total Order by Paket</h4>
                  </div>
                  <div class="card-body">
                    <div id="chart-profile-visit"></div>
                  </div>
                </div>
              </div>
          </div>
    </div>
    

@endsection