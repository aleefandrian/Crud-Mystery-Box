<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Laundry</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        a {
            text-align: center;
            margin-top: 50px;
            margin-left: 44%;
        }
    </style>
</head>

<body>
    <h1>Data Laundry</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Cucian</th>
                <th>Berat (kg)</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Pakaian</td>
                <td>5</td>
                <td>2023-10-01</td>
                <td>2023-10-03</td>
                <td>Selesai</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>Selimut</td>
                <td>3</td>
                <td>2023-10-02</td>
                <td>2023-10-04</td>
                <td>Proses</td>
            </tr>
            <!-- Tambahkan data lainnya di sini -->
        </tbody>
    </table>
</body>


        <a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>


</html>