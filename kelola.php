<?php
include 'koneksi.php';

$id = '';
$hari = '';
$poli = '';
$nama_dokter = '';
$jam_kerja = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM jadwallpoli WHERE id = '$id';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $hari = $row['hari'];
    $poli = $row['poli'];
    $nama_dokter = $row['nama_dokter'];
    $jam_kerja = $row['jam_kerja'];
}
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
   
    <title>dataRS</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                RS DATA
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php">
            <!-- Menambahkan input hidden untuk menyimpan ID yang sedang diubah -->
            <input type="hidden" name="id_asli" value="<?php echo $id; ?>">
            
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">
                    ID :
                </label>
                <div class="col-sm-10">
                    <!-- Menambahkan input hidden untuk menampilkan ID yang tidak dapat diubah -->
                    <input required type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" readonly> <br>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="hari" class="col-sm-2 col-form-label">
                    Hari :
                </label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="hari" name="hari" value="<?php echo $hari; ?>" > <br>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="poli" class="col-sm-2 col-form-label">
                    Poli :
                </label>
                <div class="col-sm-10">
                    <select required id="poli" name="poli" class="form-select" >
                        <option <?php if($poli == 'Gigi'){ echo "selected";} ?> value="Gigi">Gigi</option>
                        <option <?php if($poli == 'Umum'){ echo "selected";} ?> value="Umum">Umum</option>
                        <option <?php if($poli == 'Anak'){ echo "selected";} ?> value="Anak">Anak</option>
                        <option <?php if($poli == 'Kulit'){ echo "selected";} ?> value="Kulit">Kulit</option>
                        <option <?php if($poli == 'Bedah'){ echo "selected";} ?> value="Bedah">Bedah</option>
                        <option <?php if($poli == 'Jantung'){ echo "selected";} ?> value="Jantung">Jantung</option>
                        <option <?php if($poli == 'Gizi'){ echo "selected";} ?> value="Gizi">Gizi</option>
                        <option <?php if($poli == 'Mata'){ echo "selected";} ?> value="Mata">Mata</option>
                        <option <?php if($poli == 'Psikiatri'){ echo "selected";} ?> value="Psikiatri">Psikiatri</option>
                        <option <?php if($poli == 'Orthopedi'){ echo "selected";} ?> value="Orthopedi">Orthopedi</option>
                    </select><br>
                </div>
            </div>

            <div class="mr-5 row">
                <label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter :</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?php echo $nama_dokter; ?>" > <br>
                </div>
            </div>

            <div class="mb-10 row">
                <label for="jam_kerja" class="col-sm-2 col-form-label">Jam Kerja :</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="jam_kerja" name="jam_kerja" value="<?php echo $jam_kerja; ?>" > 
                </div>
            </div>
            
            <div class="mb-3 row mt-4">
                <div class="col">
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                        Simpan Perubahan 
                    </button>
                    <a href="index.php" type="button" class="btn btn-danger">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
