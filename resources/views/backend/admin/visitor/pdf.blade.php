<!DOCTYPE html>
<html>
<head>
    <title>List Tamu</title>
    <!-- Add any necessary styles or meta tags here -->
</head>
<body>
    <h1>List Tamu</h1>

    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datatamu as $no => $item)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $item->nama_tamu }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
