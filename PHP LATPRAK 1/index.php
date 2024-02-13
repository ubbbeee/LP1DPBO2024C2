<?php
// Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
//   kuliah Strukdat untuk keberkahanNya maka saya tidak
//   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin
include 'DPR.php';

// Dummy data sebagai contoh edit aja soalnya gabisa nyimpen data langsung teh soalnya page reload terus kalo pake sql mah bisa
//buat ngehapus tambah dulu datanya baru dihapus
$data = array(
    new DPR(1, 'Anggota 1', 'Bidang A', 'Partai X', 'AE.jpg'),
    new DPR(2, 'Anggota 2', 'Bidang B', 'Partai Y', 'Foto CV Gifa.jpg'),
    // // Tambahkan data dummy lainnya sesuai kebutuhan
);

// Handle tambah, edit/update, dan hapus
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tambah data
    if (isset($_POST['tambah'])) {
        // Cek apakah ID sudah ada pada data
        $newId = $_POST['id'];
        $idExists = false;//di set false dulu
        foreach ($data as $dpr) {//untuk setiap data dpr
            if ($dpr->get_id() == $newId) {//cek id apakah belum ada
                $idExists = true;
            }
        }

        // Jika ID belum ada, tambahkan data baru
        if (!$idExists) {
            $newNama = $_POST['nama'];//tambah data nama
            $newBidang = $_POST['bidang'];//tambah data bidang
            $newPartai = $_POST['partai'];//tambah data partai
            $newUrlPhoto = $_POST['urlphoto'];//tambah data photo

            $data[] = new DPR($newId, $newNama, $newBidang, $newPartai, $newUrlPhoto);//masukkan ke array
            echo "Data dengan ID {$newId} berhasil ditambahkan.";//beri alert
        } else {
            echo "ID sudah ada, gagal menambahkan data.";//kalau id udah ada gagal nambahkan data
        }
    }

    // Edit/update data
    else if (isset($_POST['edit'])) {//pakai form dengan name edit
        $editId = $_POST['edit_id'];//masukkin id baru
        $editNama = $_POST['edit_nama'];//masukkin nama baru
        $editBidang = $_POST['edit_bidang'];//masukkin bidang baru
        $editPartai = $_POST['edit_partai'];//masukkin partai baru
        $editPhoto = $_POST['edit_urlphoto'];//masukkin url photo baru

        foreach ($data as $key => $dpr) {//untuk setiap data dpr
            if ($dpr->get_id() == $editId) {//kalo id nya cocok masukkin data datanya
                // Update data
                $data[$key]->set_nama($editNama);
                $data[$key]->set_bidang($editBidang);
                $data[$key]->set_partai($editPartai);
                $data[$key]->set_urlphoto($editPhoto);

                echo "Data dengan ID {$editId} berhasil diubah.";//beri alert
            }
        }
    }

    // Hapus data
    else if (isset($_POST['hapus'])) {//pakai form dengan name hapus
        $hapusId = $_POST['hapus_id'];//masukkin id dari form

        foreach ($data as $key => $dpr) {//untuk setiap data dpr
            if ($dpr->get_id() == $hapusId) {//kalo id cociks
                // Hapus data menggunakan unset untuk menjaga konsistensi indeks array
                unset($data[$key]);

                // Susun ulang indeks array
                $data = array_values($data);

                echo "Data dengan ID {$hapusId} berhasil dihapus.";//beri alert
            }
        }
    }

}

// Tampilkan data id,nama,bidang,partai,photo
echo "<b>Data Anggota DPR</b>";//buat judul
echo "<form method='post'>";//pakai method post buat lihatin data
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Bidang</th>
            <th>Partai</th>
            <th>URL Photo</th>
        </tr>";//bikin header nya

foreach ($data as $dpr) {
    echo "<tr>
            <td>{$dpr->get_id()}</td>
            <td>{$dpr->get_nama()}</td>
            <td>{$dpr->get_bidang()}</td>
            <td>{$dpr->get_partai()}</td>
            <td><img src='{$dpr->get_urlphoto()}' alt='Photo' style='width: 50px; height: 50px;'></td>
        </tr>";//tampilkan tiap datanya
}

echo "</table>";
echo "</form>";

?>

<!-- Form untuk tambah data -->
<b> Tambah Data </b>
<form method="post">
    <label>ID: <input type="number" name="id" required></label>    <!-- tambahkan id -->
    <label>Nama: <input type="text" name="nama" required></label> <!-- tambahkan nama -->
    <label>Bidang: <input type="text" name="bidang" required></label> <!-- tambahkan bidang -->
    <label>Partai: <input type="text" name="partai" required></label> <!-- tambahkan partai -->
    <label>URL Photo: <input type="text" name="urlphoto" required></label> <!-- tambahkan url photo -->
    <button type="submit" name="tambah">Tambah</button><!-- buat submit -->
</form>
<b> Edit Data </b>
<!-- Form untuk edit/update data -->
<form method="post">
    <label>ID (yang akan diubah): <input type="number" name="edit_id" required></label><!-- edit id -->
    <label>Nama baru: <input type="text" name="edit_nama" required></label><!-- edit nama -->
    <label>Bidang baru: <input type="text" name="edit_bidang" required></label><!-- edit bidang -->
    <label>Partai baru: <input type="text" name="edit_partai" required></label><!-- edit partai -->
    <label>URL Photo: <input type="text" name="edit_urlphoto" required></label> <!-- edit photo -->
    <button type="submit" name="edit">Update</button>
</form>
<form method="post">
    <label>ID (yang akan dihapus): <input type="number" name="hapus_id"></label><!-- hapus berdasarkan id -->
    <button type="submit" name="hapus">Hapus</button>
</form>