@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Mengubah Data Tamu</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Daftar Tamu</a></li>
        <li class="breadcrumb-item active">Mengubah Data Tamu</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mengubah Data Tamu</h5>
        
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
                        <form class="row g-3" action="{{ isset($datatamu) ?
                            route('visitor.update', $datatamu->id) : route('visitor.store') }}"
                            id="form_datatamu" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_tamu"
                                        name="nama_tamu" value="{{ isset($datatamu) ? $datatamu->nama_tamu : '' }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="kelamin" name="kelamin" value="" required>
                                            <option selected disabled value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki" {{ (isset($datatamu) && $datatamu->kelamin == "Laki-Laki")
                                                ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="Perempuan" {{ (isset($datatamu) && $datatamu->kelamin == "Perempuan")
                                                ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Status Tamu <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="status" name="status" value="" required>
                                            <option selected disabled value="">Pilih Status Tamu</option>
                                            <option value="Regular" {{ (isset($datatamu) && $datatamu->status == "Regular")
                                                ? 'selected' : '' }}>Regular</option>
                                            <option value="VIP" {{ (isset($datatamu) && $datatamu->status == "VIP")
                                                ? 'selected' : '' }}>VIP</option>
                                            <option value="VVIP" {{ (isset($datatamu) && $datatamu->status == "VVIP")
                                                ? 'selected' : '' }}>VVIP</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Alamat <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat"
                                        name="alamat" value="{{ isset($datatamu) ? $datatamu->alamat : '' }}" required>
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