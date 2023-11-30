<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>List Tamu</h1>

    <table>
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
