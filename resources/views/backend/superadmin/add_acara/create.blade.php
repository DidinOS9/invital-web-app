@extends('backend.superadmin.layouts.navbar')

@section('content')
<main id="main" class="main">
    
    <div class="pagetitle">
        <h1>Tambah Acara</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('superadmin/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('superadmin/acara')}}">Daftar Acara</a></li>
                <li class="breadcrumb-item active">Tambah Acara</li>
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
                            <form class="row g-3" action="{{route('acara.store')}}" id="dataacara_form" method="POST">
                            @csrf
                            <h5>Mempelai Pria / Suami</h5>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Suami <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="id_nama_suami" name="id_nama_suami" required>
                                        <option selected disabled value="">Pilih Nama Suami...</option>
                                        @foreach($datauser as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah Suami <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_ayah_suami"
                                    name="nama_ayah_suami" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu Suami <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_ibu_suami"
                                    name="nama_ibu_suami"  required>
                                </div>
                            </div>
                            
                            <h5>Mempelai Wanita / Istri</h5>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Istri <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_istri"
                                    name="nama_istri" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah Istri <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_ayah_istri"
                                    name="nama_ayah_istri" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu Istri <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_ibu_istri"
                                    name="nama_ibu_istri" required>
                                </div>
                            </div>
                            
                            <h5>Acara Akad</h5>
                            <div class="row mb-3">
                                <label for="selectDay" class="col-sm-2 col-form-label">Hari Akad <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" id="hari_akad"
                                    name="hari_akad" value="" required>
                                    <option selected disabled value="">Pilih Hari...</option>
                                    <option>Senin</option>
                                    <option >Selasa</option>
                                    <option >Rabu</option>
                                    <option >Kamis</option>
                                    <option >Jumat</option>
                                    <option >Sabtu</option>
                                    <option >Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Akad <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_akad"
                                name="tgl_akad" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Jam Akad <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" id="jam_mulai_akad"
                                name="jam_mulai_akad" required>
                            </div>
                            <label for="inputTime" class="col-sm-2 col-form-label">Sampai Dengan <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" id="jam_selesai_akad"
                                name="jam_selesai_akad" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat Akad <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" style="height: 100px" class="form-control" id="alamat_akad"
                                name="alamat_akad" required>
                            </div>
                        </div>
                        
                        <h5>Acara Resepsi</h5>
                        <div class="row mb-3">
                            <label for="selectDay" class="col-sm-2 col-form-label">Hari Resepsi <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="hari_resepsi"
                                name="hari_resepsi" value="" required>
                                <option selected disabled value="">Pilih Hari...</option>
                                <option>Senin</option>
                                <option >Selasa</option>
                                <option >Rabu</option>
                                <option >Kamis</option>
                                <option >Jumat</option>
                                <option >Sabtu</option>
                                <option >Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Resepsi <span class="required">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_resepsi"
                            name="tgl_resepsi" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Jam Resepsi <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" id="jam_mulai_resepsi"
                                name="jam_mulai_resepsi" required>
                                </div>
                                <label for="inputTime" class="col-sm-2 col-form-label">Sampai Dengan <span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="time" class="form-control" id="jam_selesai_resepsi"
                                    name="jam_selesai_resepsi" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Alamat Resepsi <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" style="height: 100px" class="form-control" id="alamat_resepsi"
                                        name="alamat_resepsi" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="text-center">
                                        <button class="btn btn-primary" style="width: 200px" type="submit">Save</button>
                                        <a href="{{ route('acara.index') }}">
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