@extends('backend.admin.layouts.navbar')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Daftar Tamu</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Daftar Tamu</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">
        
                    <div class="card">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success mt-3">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                        
                        {{-- <form action="{{ route('admin.visitor.import-visitor') }}" method="post" enctype="multipart/form-data" class="mb-3" id="importForm">
                            @csrf
                            <div class="row mt-5">
                                <label for="inputFile" class="col-sm-3 col-form-label" onclick="validateFile()"><strong>Upload List Tamu</strong></label>
                                <div class="col-sm-9">
                                <input class="form-control" type="file" name="file" id="fileInput" accept=".xlsx, .xls">
                                @error('file')
                                    <small class="text-danger">{{ $error }}</small>
                                @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Unggah File</button>
                                    <a href="{{ route('visitor.create') }}"><button class="btn btn-secondary" type="button">Tambah Tamu</button></a>
                                </div>
                            </div>
                        </form> --}}
                        <form action="{{ route('admin.visitor.import-visitor') }}" method="post" enctype="multipart/form-data" class="mb-3" id="importForm">
                            @csrf
                            <div class="row mt-5">
                                <label for="inputFile" class="col-sm-3 col-form-label"><strong>Upload List Tamu</strong></label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="file" id="fileInput" accept=".xlsx, .xls">
                                    @error('file')
                                        <small class="text-danger">{{ $error }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" onclick="validateFile()">Unggah File</button>
                                    <a href="{{ route('visitor.create') }}"><button class="btn btn-secondary" type="button">Tambah Tamu</button></a>
                                </div>
                            </div>
                        </form>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datatamu as $no => $item)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $item->nama_tamu }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('visitor.destroy', $item->id) }}" method="POST">
                                            <a href="{{ route('visitor.edit',$item->id) }}"
                                                class="btn btn-warning">
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

    @push('scripts')
        <script>
            function validateFile() {
                var fileInput = document.getElementById('fileInput');

                if (fileInput.files.length === 0) {
                    alert('Pilih file sebelum mengklik unggah.');
                } else {
                    // Submit form if file is selected
                    document.getElementById('importForm').submit();
                }
            }
        </script>
    @endpush
@endsection