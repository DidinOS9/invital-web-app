@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Detail Acara</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Daftar Acara</a></li>
        <li class="breadcrumb-item active">Detail Acara</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Detail Data Acara</h5>
                            
                            <div class="row">
                                <div class="col-lg-4 ml-auto">
                                    <a class="btn btn-primary">
                                        <button class="btn btn-primary" type="button">Tampilan Halaman Monitor</button>
                                    </a>
                                </div>
                            </div>
                        <br>                            

                            <!-- General Form Elements -->
                            <form class="row g-3" action="{{ isset($dataacara) ?
                                route('weddings.show', $dataacara->id) : route('weddings.store') }}"
                                id="dataacara_form" method="POST">
                                @csrf
                                @method('PUT')
                                <h5>Mempelai Pria / Suami</h5>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Suami <span class="required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_suami"
                                    name="id_suami" value="{{ isset($dataacara) ?
                                        $dataacara->id_nama_suami : '' }}" readonly disabled  required>
                                    </div>
                                </div>
                            {{-- <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Suami <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="id_suami" name="id_suami" required>
                                        @foreach($namasuami as $item)
                                        @if ($item->id == $dataacara->id_nama_suami)
                                            <option value="{{ $item->id}} selected readonly ">{{ $item->name }}</option>   
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah Suami <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_ayah_suami"
                                name="nama_ayah_suami" value="{{ isset($dataacara) ?
                                    $dataacara->nama_ayah_suami : '' }}" readonly disabled  required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu Suami <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_ibu_suami"
                                name="nama_ibu_suami" value="{{ isset($dataacara) ?
                                    $dataacara->nama_ibu_suami : '' }}" readonly disabled  required>
                                </div>
                            </div>
    
                            <h5>Mempelai Wanita / Istri</h5>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Istri <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_istri"
                                name="nama_istri" value="{{ isset($dataacara) ?
                                    $dataacara->nama_istri : '' }}" readonly disabled  required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah Istri <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_ayah_istri"
                                name="nama_ayah_istri" value="{{ isset($dataacara) ?
                                    $dataacara->nama_ayah_istri : '' }}" readonly disabled  required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu Istri <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_ibu_istri"
                                name="nama_ibu_istri" value="{{ isset($dataacara) ?
                                    $dataacara->nama_ibu_istri : '' }}" readonly disabled required>
                                </div>
                            </div>
    
                            <h5>Acara Akad</h5>
                            <div class="row mb-3">
                                <label for="selectDay" class="col-sm-2 col-form-label">Hari Akad <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <select type="text" class="form-control" id="hari_akad"
                                name="hari_akad" value="" readonly disabled required>
                                    <option selected disabled value="">Pilih Hari...</option>
                                    <option value="Senin" {{ (isset($dataacara) && $dataacara->hari_akad == "Senin")
                                        ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ (isset($dataacara) && $dataacara->hari_akad == "Selasa")
                                        ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ (isset($dataacara) && $dataacara->hari_akad == "Rabu")
                                        ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ (isset($dataacara) && $dataacara->hari_akad == "Kamis")
                                        ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ (isset($dataacara) && $dataacara->hari_akad == "Jumat")
                                        ? 'selected' : '' }}>Jumat</option>
                                    <option value="Sabtu" {{ (isset($dataacara) && $dataacara->hari_akad == "Sabtu")
                                        ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Minggu" {{ (isset($dataacara) && $dataacara->hari_akad == "Minggu")
                                        ? 'selected' : '' }}>Minggu</option>
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Akad <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_akad"
                                name="tgl_akad" value="{{ isset($dataacara) ?
                                    $dataacara->tgl_akad : '' }}" readonly disabled  required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Jam Akad <span class="required">*</span></label>
                                <div class="col-sm-4">
                                <input type="time" class="form-control" id="jam_mulai_akad"
                                name="jam_mulai_akad" value="{{ isset($dataacara) ?
                                    $dataacara->jam_mulai_akad : '' }}" readonly disabled  required>
                                </div>
                                    <label for="inputTime" class="col-sm-2 col-form-label">Sampai Dengan <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="time" class="form-control" id="jam_selesai_akad"
                                    name="jam_selesai_akad" value="{{ isset($dataacara) ?
                                        $dataacara->jam_selesai_akad : '' }}" readonly disabled  required>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat Akad <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" style="height: 100px" class="form-control" id="alamat_akad"
                                name="alamat_akad" value="{{ isset($dataacara) ?
                                    $dataacara->alamat_akad : '' }}" readonly disabled  required>
                                </div>
                            </div>
    
                            <h5>Acara Resepsi</h5>
                            <div class="row mb-3">
                                <label for="selectDay" class="col-sm-2 col-form-label">Hari Resepsi <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <select type="text" class="form-control" id="hari_resepsi"
                                name="hari_resepsi" value="" readonly disabled  required>
                                    <option selected disabled value="">Pilih Hari...</option>
                                    <option value="Senin" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Senin")
                                        ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Selasa")
                                        ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Rabu")
                                        ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Kamis")
                                        ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Jumat")
                                        ? 'selected' : '' }}>Jumat</option>
                                    <option value="Sabtu" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Sabtu")
                                        ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Minggu" {{ (isset($dataacara) && $dataacara->hari_resepsi == "Minggu")
                                        ? 'selected' : '' }}>Minggu</option>
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Resepsi <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_resepsi"
                                name="tgl_resepsi" value="{{ isset($dataacara) ?
                                    $dataacara->tgl_resepsi : '' }}" readonly disabled  required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Jam Resepsi <span class="required">*</span></label>
                                <div class="col-sm-4">
                                <input type="time" class="form-control" id="jam_mulai_resepsi"
                                name="jam_mulai_resepsi" value="{{ isset($dataacara) ?
                                    $dataacara->jam_mulai_resepsi : '' }}" readonly disabled  required>
                                </div>
                                    <label for="inputTime" class="col-sm-2 col-form-label">Sampai Dengan <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="time" class="form-control" id="jam_selesai_resepsi"
                                    name="jam_selesai_resepsi" value="{{ isset($dataacara) ?
                                        $dataacara->jam_selesai_resepsi : '' }}" readonly disabled  required>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat Resepsi <span class="required">*</span></label>
                                <div class="col-sm-10">
                                <input type="text" style="height: 100px" class="form-control" id="alamat_resepsi"
                                name="alamat_resepsi" value="{{ isset($dataacara) ?
                                    $dataacara->alamat_resepsi : '' }}" readonly disabled  required>
                                </div>
                            </div>
            
    
                            <div class="text-center">
                                <a class="btn btn-primary" href="{{ route('weddings.index') }}" style="width: 200px" type="button">Added Visitor</a>
                                <a class="btn btn-secondary" href="{{ route('weddings.index') }}" style="width: 200px" type="button">Back</a>
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