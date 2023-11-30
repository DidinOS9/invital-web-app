@extends('backend.superadmin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Daftar Pengguna / Client</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('superadmin/dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Daftar Pengguna</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
    
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    <a href="{{ route('users.create') }}"><button class="btn btn-primary" type="button">Tambah Pengguna</button></a>
                    
                    <h5 class="card-title"></h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $no => $item)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('users.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-warning" href="{{ route('users.edit',$item->id) }}">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
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