@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Daftar Acara</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">Daftar Acara</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
    
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Suami</th>
                        <th scope="col">Tanggal Akad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td>2016-05-25</td>
                            <td>brandon@gmail.com</td>
                            <td>084545454334</td>
                            <td>Singonjuruh, Banyuwangi</td>
                            <td>
                                <div class="btn-group">
                                    <form>
                                        <button type="submit" class="btn btn-warning"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Bridie Kessler</td>
                        <td>2016-05-25</td>
                            <td>brandon@gmail.com</td>
                            <td>084545454334</td>
                            <td>Singonjuruh, Banyuwangi</td>
                            <td>
                                <div class="btn-group">
                                    <form>
                                        <button type="submit" class="btn btn-warning"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Ashleigh Langosh</td>
                        <td>2016-05-25</td>
                            <td>brandon@gmail.com</td>
                            <td>084545454334</td>
                            <td>Singonjuruh, Banyuwangi</td>
                            <td>
                                <div class="btn-group">
                                    <form>
                                        <button type="submit" class="btn btn-warning"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
    
                </div>
                </div>
    
            </div>
        </div>
    </section>


</main><!-- End #main -->
@endsection