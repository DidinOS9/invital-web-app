
<head>
<!-- Favicons -->
<link href="{{ asset('backend/assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

<style>
    @media print {
        #downloadButton {
            display: none;
        }
    }
</style>
</head>

@foreach ($qrcodes as $qr)
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <!-- Tambahkan ikon dari RemixIcon -->
            <h2><i class="ri-wedding-line"></i> Undangan Pernikahan</h2>
        </div>
        <div class="card-body text-center">
            <h4 class="card-title">To : {{ $qr['name'] }}</h4>

            <!-- Informasi Pernikahan -->
            <p><strong><i class="ri-calendar-event-line"></i> Akad Nikah:</strong></p>
            <p><i class="ri-calendar-line"></i> Hari: {{ $acara->hari_akad }}</p>
            <p><i class="ri-calendar-line"></i> Tanggal: {{ $acara->tgl_akad }}</p>
            <p><i class="ri-time-line"></i> Jam: {{ $acara->jam_mulai_akad }} - {{ $acara->jam_selesai_akad }}</p>
            <p><i class="ri-location-line"></i> Alamat: {{ $acara->alamat_akad }}</p>

            <p><strong><i class="ri-calendar-event-line"></i> Resepsi:</strong></p>
            <p><i class="ri-calendar-line"></i> Hari: {{ $acara->hari_resepsi }}</p>
            <p><i class="ri-calendar-line"></i> Tanggal: {{ $acara->tgl_resepsi }}</p>
            <p><i class="ri-time-line"></i> Jam: {{ $acara->jam_mulai_resepsi }} - {{ $acara->jam_selesai_resepsi }}</p>
            <p><i class="ri-location-line"></i> Alamat: {{ $acara->alamat_resepsi }}</p>

            <!-- Informasi Orang Tua -->
            <div class="row">
                <div class="col-md-6">
                    <p><strong><i class="ri-parent-line"></i> Orang Tua Suami:</strong></p>
                    <p><i class="ri-user-line"></i> Ayah: {{ $acara->nama_ayah_suami }}</p>
                    <p><i class="ri-user-line"></i> Ibu: {{ $acara->nama_ibu_suami }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong><i class="ri-parent-line"></i> Orang Tua Istri:</strong></p>
                    <p><i class="ri-user-line"></i> Ayah: {{ $acara->nama_ayah_istri }}</p>
                    <p><i class="ri-user-line"></i> Ibu: {{ $acara->nama_ibu_istri }}</p>
                </div>
            </div>
            <!-- Tambahkan ikon QR Code -->
            <img src="{{ $qr['qrcode'] }}" alt="QR Code">
        </div>
    </div>
</div>


@endforeach

<div class="fixed-bottom fixed-right m-4">
    <button id="downloadButton" class="btn btn-primary rounded-circle" onclick="window.print()">
        <i class="ri-download-2-line"></i>
    </button>
</div>
