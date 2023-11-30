@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Dashboard Client Organizer</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">

            <!-- Customers Card -->
            <div class="col-xxl-6 col-xl-6">

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
                <h5 class="card-title">Events</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ count($Acara) }}</h6>

                    </div>
                </div>

                </div>
            </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-6 col-xl-6">

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
                    <h5 class="card-title">Visitor</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{ count($Tamu) }}</h6>
    
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