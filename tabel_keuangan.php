<?php
// Database connection
include "koneksi.php";

// SQL query to fetch data
$sql = "SELECT * FROM data_keuangan";
$result = $conn->query($sql);

// Start of HTML content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel Keuangan Laundry</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
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
    <h2>Tabel Keuangan Laundry</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
        <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id_laundry"] . "</td>
                                <td>" . $row["waktu"] . "</td>
                                <td>" . $row["deskripsi"] . "</td>
                                <td>" . $row["pemasukan"] . "</td>
                                <td>" . $row["pengeluaran"] . "</td>
                                <td>" . $row["saldo"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No data available</td></tr>";
                }
                ?>
        </tbody>
    </table>
</body>
<a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>
</html>