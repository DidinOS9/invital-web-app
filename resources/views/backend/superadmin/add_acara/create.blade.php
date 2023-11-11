@extends('backend.superadmin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Tambah Acara</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Daftar Acara</a></li>
        <li class="breadcrumb-item active">Tambah Acara</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Masukan Informasi Acara baru</h5>
        
                        <!-- General Form Elements -->
                        <form>
                            <h5>Mempelai Pria / Suami</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Suami</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah Suami</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu Suami</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>

                        <h5>Mempelai Wanita / Istri</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Istri</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah Istri</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu Istri</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>

                        <h5>Acara Akad</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Hari Akad</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Akad</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Jam Akad</label>
                            <div class="col-sm-4">
                            <input type="time" class="form-control">
                            </div>
                                <label for="inputTime" class="col-sm-2 col-form-label">Sampai Dengan</label>
                                <div class="col-sm-4">
                                <input type="time" class="form-control">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat Akad</label>
                            <div class="col-sm-10">
                            <input type="text" style="height: 100px" class="form-control">
                            </div>
                        </div>

                        <h5>Acara Resepsi</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Hari Resepsi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Resepsi</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Jam Resepsi</label>
                            <div class="col-sm-4">
                            <input type="time" class="form-control">
                            </div>
                                <label for="inputTime" class="col-sm-2 col-form-label">Sampai Dengan</label>
                                <div class="col-sm-4">
                                <input type="time" class="form-control">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat Resepsi</label>
                            <div class="col-sm-10">
                            <input type="text" style="height: 100px" class="form-control">
                            </div>
                        </div>
        

                        <div class="text-center">
                            <button class="btn btn-primary" style="width: 200px" type="submit">Save</button>
                            <a href="">
                                <button class="btn btn-secondary" style="width: 200px" type="button">Cancel</button>
                            </a>
                        </div>
        
                        </form><!-- End General Form Elements -->
        
                    </div>
                    </div>

            </div>
            
        </div>
    </section>

</main><!-- End #main -->
@endsection