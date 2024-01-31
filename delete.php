<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lakukan proses penghapusan data sesuai dengan ID yang diberikan
    $query = "DELETE FROM jadwallpoli WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
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
    } else {
        $message = "Terjadi kesalahan: " . mysqli_error($conn);
        $alertType = "danger";
    }

    // Redirect kembali ke halaman utama setelah menghapus
    session_start();
    $_SESSION['hasil'] = $message . "," . $alertType;
    header("Location: index.php");
    exit();
} else {
    // Tindakan jika parameter 'id' tidak ada, misalnya, arahkan kembali ke halaman utama
    header("Location: index.php");
    exit();
}
?>
