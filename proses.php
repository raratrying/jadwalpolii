<?php
include 'koneksi.php';
session_start();

if (isset($_POST['aksi'])) {
    $aksi = $_POST['aksi'];

    $hari = mysqli_real_escape_string($conn, $_POST['hari']);
    $poli = mysqli_real_escape_string($conn, $_POST['poli']);
    $nama_dokter = mysqli_real_escape_string($conn, $_POST['nama_dokter']);
    $jam_kerja = mysqli_real_escape_string($conn, $_POST['jam_kerja']);

    if ($aksi == 'add') {
        // Dapatkan nilai id tertinggi
        $result = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM jadwallpoli");
        $row = mysqli_fetch_assoc($result);
        $next_id = $row['max_id'] + 1;

        // Masukkan data baru dengan id baru
        $query = "INSERT INTO jadwallpoli (id, hari, poli, nama_dokter, jam_kerja) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            $message = "Terjadi kesalahan: " . mysqli_error($conn);
            $alertType = "danger";
            $_SESSION['hasil'] = $message . "," . $alertType;
            header("Location: index.php");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "issss", $next_id, $hari, $poli, $nama_dokter, $jam_kerja);
    } elseif ($aksi == 'edit') {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE jadwallpoli SET hari=?, poli=?, nama_dokter=?, jam_kerja=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            $message = "Terjadi kesalahan: " . mysqli_error($conn);
            $alertType = "danger";
            $_SESSION['hasil'] = $message . "," . $alertType;
            header("Location: index.php");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ssssi", $hari, $poli, $nama_dokter, $jam_kerja, $id);
    }

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $message = "Data berhasil di" . ($aksi == 'add' ? 'tambahkan' : 'ubah');
        $alertType = "success";
    } else {
        $message = "Terjadi kesalahan: " . mysqli_error($conn);
        $alertType = "danger";
    }

    mysqli_stmt_close($stmt);

    $_SESSION['hasil'] = $message . "," . $alertType;
    header("Location: index.php");
    exit();
    
} elseif (isset($_POST['hapus'])) {
    $id = mysqli_real_escape_string($conn, $_POST['hapus']);
    $query = "DELETE FROM jadwallpoli WHERE id=?";
    
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        $message = "Terjadi kesalahan: " . mysqli_error($conn);
        $alertType = "danger";
        $_SESSION['hasil'] = $message . "," . $alertType;
        header("Location: index.php");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $message = "Data berhasil dihapus";
        $alertType = "success";
    } else {
        $message = "Terjadi kesalahan: " . mysqli_error($conn);
        $alertType = "danger";
    }

    mysqli_stmt_close($stmt);

    $_SESSION['hasil'] = $message . "," . $alertType;
    header("Location: index.php");
    exit();
}
?>
