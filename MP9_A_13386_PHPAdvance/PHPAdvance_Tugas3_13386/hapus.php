<?php
    // 1. Panggil file koneksi
    require 'koneksi.php';

    // 2. Ambil id dari link memakai $_GET['id'] dengan nilai default
    $id = $_GET['id'] ?? '';

    // 3. Validasi id: jika id kosong ATAU bukan angka (gunakan ctype_digit)
    if ($id === '' || !ctype_digit($id)) {
        echo '<p style="color: red;">!! ID tidak valid. !!</p>';
    } else {
        // 4. Jika id valid, hapus datanya
        $stmt = mysqli_prepare($conn, 'DELETE FROM mahasiswa WHERE id = ?');
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        // 5. Cek hasilnya dengan mysqli_stmt_affected_rows()
        if (mysqli_stmt_affected_rows($stmt) === 1) {
            echo '<p>Data berhasil dihapus.</p>';
        } else {
            echo '<p>Data tidak ditemukan.</p>';
        }
    }

    // 6. Tampilkan link "Kembali" menuju index.php
    echo '<br><a href="index.php">Kembali</a>';
?>