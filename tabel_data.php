
<?php
// Database connection
include "koneksi.php";

// SQL query to fetch data
$sql = "SELECT * FROM data_laundry";
$result = $conn->query($sql);

// Start of HTML content
?>
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
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Data Laundry</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Cucian</th>
                    <th>Berat (kg)</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id_laundry"] . "</td>
                                <td>" . $row["id_akun"] . "</td>
                                <td>" . $row["jenis_cucian"] . "</td>
                                <td>" . $row["berat"] . "</td>
                                <td>" . $row["no_hp"] . "</td>
                                <td>" . $row["status"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="btn-container">
            <a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Close connection
$conn->close();
?>
=======
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
<?php
include('koneksi.php');

// Mengambil data user dari tabel akun
$query = "SELECT nama,jenis_cucian,berat,status FROM data_laundry";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}
?>


    <h1>Data Laundry</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Cucian</th>
                <th>Berat (kg)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
    $no = 1; // Counter for serial number
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo htmlspecialchars($row['nama']); ?></td>
        <td><?php echo htmlspecialchars($row['jenis_cucian']); ?></td>
        <td><?php echo intval($row['berat']); ?></td>
        
        <td><?php echo htmlspecialchars($row['status']); ?></td>
      </tr>
    <?php } ?>

            
        </tbody>
    </table>
</body>


        <a href="index.php" class="btn btn-primary">Kembali ke halaman awal</a>


</html>
