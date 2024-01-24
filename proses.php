<?php
// mendapatkan data dari form HTML
$nomor_punggung = $_POST['nomor_punggung'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];


// melakukan query untuk menyimpan data baru ke dalam tabel pemain_bola
$query = "INSERT INTO pemain (nomor_punggung, nama, alamat, umur) VALUES ('$nomor_punggung', '$nama', '$alamat', '$umur')";
$result = mysqli_query($koneksi, $query);

// mengecek apakah data berhasil disimpan atau tidak
if ($result) {
    echo "Data berhasil disimpan.";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}

// menutup koneksi ke database
mysqli_close($koneksi);



// melakukan query untuk mengambil data pemain bola
$query = "SELECT * FROM pemain";
$result = mysqli_query($koneksi, $query);

// menampilkan data pemain bola
while ($row = mysqli_fetch_assoc($result)) {
    echo "Nomor Punggung: " . $row['nomor_punggung'] . "<br>";
    echo "Nama: " . $row['nama'] . "<br>";
    echo "Alamat: " . $row['alamat'] . "<br>";
    echo "Umur: " . $row['umur'] . "<br>";
    echo "Posisi: " . $row['posisi'] . "<br><br>";
}

// menghapus hasil query dari memory
mysqli_free_result($result);

// menutup koneksi ke database
mysqli_close($koneksi);

?>
