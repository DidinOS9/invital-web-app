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
                        <th scope="col">Nama Istri</th>
                        <th scope="col">Tanggal Akad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataacara as $no =>  $item)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $item->namasuami->name }}</td>
                            <td>{{ $item->nama_istri }}</td>
                            <td>{{ $item->tgl_akad }}</td>
                            <td>{{ $item->namasuami->email }}</td>
                            <td>{{ $item->namasuami->phone_number }}</td>
                            <td>{{ $item->alamat_akad }}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="" method="POST">
                                        <a href="{{ route('weddings.show',$item->id) }}"
                                            class="btn btn-warning">
                                            <i class="bi bi-sunrise"></i>
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
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