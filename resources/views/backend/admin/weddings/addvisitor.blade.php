@extends('backend.admin.layouts.navbar')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Pilih Tamu</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Acara</a></li>
        <li class="breadcrumb-item active">Pilih Tamu </li>
        </ol>
    </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
    
                <div class="card">
                <div class="card-body"> <br>

                    {{-- <h5 class="card-title">{{ $id_acara }}</h5> --}}
    
                    <!-- Table with stripped rows -->
                    <form method="post" action="{{ route('admin.undangan') }}">
                        @csrf
                    <input type="hidden" name="id-acara" value="{{ $id_acara }}">
                    <table class="table datatable">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($tamu as $t)
                        <td><input type="checkbox" name="selectedTamu[]" value="{{ $t->id }}"></td>
                        <td>{{ $t->nama_tamu }}</td>
                        <td>{{ $t->kelamin }}</td>
                        <td>{{ $t->status }}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-primary" onclick="return validateForm()" style="width: 200px" type="submit">Buat Undangan</button>
                        <a class="btn btn-secondary" href="{{ route('weddings.index') }}" style="width: 200px" type="button">Back</a>
                    </div>
                    </form>
                    <!-- End Table with stripped rows -->
    
                </div>
                </div>
    
            </div>
        </div>
    </section>


</main><!-- End #main -->
@endsection
@push('content-js')
<script>
    function validateForm() {
        var checkboxes = document.querySelectorAll('input[name="selectedTamu[]"]:checked');
        if (checkboxes.length < 1) {
            alert("Pilih setidaknya satu tamu!");
            return false; // Form tidak dikirim
        }
        return true; // Form dikirim
    }
</script>
@endpush