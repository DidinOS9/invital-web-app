@extends('backend.superadmin.layouts.navbar')

@section('content')
<main id="main" class="main">
    
    <div class="pagetitle">
        <h1>Tambah Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="">Daftar Pengguna</a></li>
                <li class="breadcrumb-item active">Tambah Pengguna</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Pengguna Baru
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
                        <h5 class="card-title"></h5>
                        
                        
                        <!-- General Form Elements -->
                        <form class="row g-3" id="user" method="POST" 
                        action="{{ isset($user) ? route('users.update',
                        $user->id) : route('users.store') }}"
                        >
                        @csrf
                        @method('PUT')
                        @if(isset($user))
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        @endif
                        
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" minlength="5"required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Username <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" minlength="5" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" minlength="5" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" minlength="8" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone_number" name="phone_number" minlength="10" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Instagram <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="instagram" name="instagram" minlength="5" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" style="height: 100px" id="alamat" name="alamat" minlength="5" required>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button class="btn btn-primary" style="width: 200px" type="submit">Save</button>
                            <a href="{{ route('users.index') }}">
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