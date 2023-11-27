@extends('backend.superadmin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Dashboard Vendor Organizer</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Weddings Event</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{$jumlahAcara}}</h6>
                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Weddings Users</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri ri-admin-line"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{$jumlahUsers}}</h6>
                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Add Visitor</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ $jumlahVisitor }}</h6>
                    </div>
                </div>

                </div>
            </div>

            </div><!-- End Customers Card -->

        </div>
        </div><!-- End Left side columns -->

    </div>
    </section>

</main><!-- End #main -->
@endsection