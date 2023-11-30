@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>About Me</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Tentang Aplikasi</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">

            <div class="card">
                <img style="width: 400px; height: 400px; margin:auto;"  src="{{ asset('backend/assets/img/favicon.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <center>
                    <p class="card-text">Invitations Digital merupakan solusi modern dan ramah lingkungan untuk mengelola undangan acara Anda, memberikan kemudahan, efisiensi, dan fleksibilitas dalam proses pengiriman undangan.</p>
                    </center>
                </div>
            </div><!-- End Card with an image on top -->


        </div>
        </div><!-- End Left side columns -->

    </div>
    </section>

</main><!-- End #main -->
@endsection