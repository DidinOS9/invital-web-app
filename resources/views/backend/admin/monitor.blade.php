<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <style>
        .animated-text {
            position: absolute;
            text-align: center;
            font-size: 24px;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="animated-text" id="text-container">{{ isset($nama) ? "Selamat Datang: $nama" : "Tamu belum datang" }}
    </div>

    <script>
        var textElement = document.getElementById("text-container");
        var currentPosition = window.innerHeight; // Mulai dari bawah halaman

        function animateText() {
            if (currentPosition < 0) {
                currentPosition = window.innerHeight; // Reset ke bawah halaman saat mencapai atas
            }

            currentPosition -= 1; // Kecepatan pergerakan teks
            textElement.style.bottom = currentPosition + "px";
            requestAnimationFrame(animateText);
        }

        animateText();
    </script>
</body>
</html>
