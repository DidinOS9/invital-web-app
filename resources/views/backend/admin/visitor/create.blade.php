@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Tambah Tamu</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/visitor') }}">Daftar Tamu</a></li>
        <li class="breadcrumb-item active">Tambah Tamu</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Acara Baru
                        </h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops</strong> Ada yang salah dengan yang kamu inputkan. <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                        <!-- General Form Elements -->
                        <form class="row g-3" action="{{route('visitor.store')}}" id="form_visitor" method="POST">
                            @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Tamu<span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_tamu"
                                        name="nama_tamu" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="kelamin" name="kelamin" required>
                                            <option selected disabled value="">Pilih Jenis Kelamin</option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Status Tamu <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="status" name="status" required>
                                            <option selected disabled value="">Pilih Status Tamu</option>
                                            <option>Regular</option>
                                            <option>VIP</option>
                                            <option>VVIP</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Alamat <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat"
                                        name="alamat" required>
                                    </div>
                                </div>

                        <div class="text-center">
                            <button class="btn btn-primary" style="width: 200px" type="submit">Save</button>
                            <a href="{{ route('visitor.index') }}">
                                <button class="btn btn-secondary" style="width: 200px" type="button">Cancel</button>
                            </a>
                        </div>
        
                        </form><!-- End General Form Elements -->
        
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->
@endsection