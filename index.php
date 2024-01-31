<?php
include 'koneksi.php';

$query = "SELECT * FROM jadwallpoli";
$result = mysqli_query($conn, $query);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    
	<!-- datables -->
	<link rel="stylesheet" type="text/css" href="datatables/datatables.css"/>
	<script type="text/javascript" src="datatables/datatables.js"></script>
    <title>Jadwal Poli RS</title>
</head>
<script type="text/javascript">
	$(document).ready( function () {
		$('#dt').DataTable();
	} );
</script>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            RS DATA
          </a>
        </div>
    </nav>

    <div class="container mt-4 p-3 mb-2 bg-white ">
        <h2>Jadwal Poli RS</h2>

        <!-- Untuk pesan hasil aksi -->
        <?php
        if (isset($_SESSION['hasil'])) {
            $split = explode(",", $_SESSION['hasil']);
            ?>
            <div class="alert alert-<?php echo $split[1];?> alert-dismissible fade show" role="alert">
                <strong><?php echo $split[0];?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            session_destroy();
        }
        ?>

        <a href="kelola.php" type="button" class="btn btn-secondary mb-3 text-white">
            Tambah Data
        </a>

        <div class="table-responsive">
            <table id="dt" class="table align-middle table-bordered ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hari</th>
                        <th>Poli</th>
                        <th>Nama Dokter</th>
                        <th>Jam Kerja</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['hari']; ?></td>
                        <td><?php echo $row['poli']; ?></td>
                        <td><?php echo $row['nama_dokter']; ?></td>
                        <td><?php echo $row['jam_kerja']; ?></td>
                        <td>
                            <!-- Tambahkan tombol edit dengan link ke kelola.php -->
                            <a href='kelola.php?id=<?php echo $row['id'];?>' class="btn btn-success btn-sm">Edit</a>
                            <!-- Tambahkan tombol delete dengan link ke delete.php -->
                            <a href='delete.php?id=<?php echo $row['id'];?>' onclick='return confirm("Apakah Anda yakin ingin menghapus data?")' class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
