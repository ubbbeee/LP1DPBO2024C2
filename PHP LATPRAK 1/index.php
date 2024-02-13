<?php
// Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
//   kuliah Strukdat untuk keberkahanNya maka saya tidak
//   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin
include 'DPR.php';

// Dummy data awal sebagai contoh
$dpr1 = new DPR(1, 'Nama1', 'Bidang1', 'Partai1', 'https://www.w3schools.com/images/w3schools_green.jpg');
$dpr2 = new DPR(2, 'Nama2', 'Bidang2', 'Partai2', 'death.jpg');

$dprArray = [$dpr1, $dpr2];

// Fungsi untuk menampilkan data dalam bentuk tabel
function displayTable($data)
{
    echo "<b>Data Anggota DPR<b>";
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Bidang</th>
            <th>Partai</th>
            <th>URL Photo</th>
            <th>Action</th>
        </tr>";

    foreach ($data as $dpr) {
        echo "<tr>
            <td>{$dpr->get_id()}</td>
            <td>{$dpr->get_nama()}</td>
            <td>{$dpr->get_bidang()}</td>
            <td>{$dpr->get_partai()}</td>
            <td><img src='{$dpr->get_urlphoto()}' alt='Photo' style='width: 50px; height: 50px;'></td>
            <td>
                <a href='index.php?action=insert'>Insert</a>
                <a href='index.php?action=edit&id={$dpr->get_id()}'>Edit</a>
                <a href='index.php?action=delete&id={$dpr->get_id()}'>Delete</a>
            </td>
        </tr>";
    }

    echo "</table>";
}

// Fungsi untuk menampilkan form tambah/update data
function displayForm($id, $nama, $bidang, $partai, $urlphoto)
{
    echo "<form method='post' action='index.php'>
        ID <input type='number' name='id' value='$id'>
        Nama: <input type='text' name='nama' value='$nama'><br>
        Bidang: <input type='text' name='bidang' value='$bidang'><br>
        Partai: <input type='text' name='partai' value='$partai'><br>
        URL Photo: <input type='text' name='urlphoto' value='$urlphoto'><br>
        <input type='submit' name='action' value='save'>
    </form>";
}

// Fungsi untuk mencari DPR berdasarkan ID
function findDPRById($id, $data)
{
    foreach ($data as $dpr) {
        if ($dpr->get_id() == $id) {
            return $dpr;
        }
    }
    return null;
}

// Main Program
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'save') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $partai = $_POST['partai'];
    $urlphoto = $_POST['urlphoto'];

    if ($id) {
        // Update data
        $dpr = findDPRById($id, $dprArray);
        if ($dpr) {
            $dpr->set_nama($nama);
            $dpr->set_bidang($bidang);
            $dpr->set_partai($partai);
            $dpr->set_urlphoto($urlphoto);
        }
    } else {
        // Tambah data baru
        $newId = count($dprArray) + 1;
        $newDPR = new DPR($newId, $nama, $bidang, $partai, $urlphoto);
        $dprArray[] = $newDPR;
    }
}

elseif ($action === 'insert') {
    echo "<b>Form Insert Data Anggota DPR<b>";
    displayForm('', '', '', '', '');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newId = $_POST['id'];
        $nama = $_POST['nama'];
        $bidang = $_POST['bidang'];
        $partai = $_POST['partai'];
        $urlphoto = $_POST['urlphoto'];

        // Validasi jika ID belum ada
        if (!findDPRById($newId, $dprArray)) {
            $newDPR = new DPR($newId, $nama, $bidang, $partai, $urlphoto);
            $dprArray[] = $newDPR;
            echo "<br>Data berhasil ditambahkan.";
        } else {
            echo "<br>Data dengan ID tersebut sudah ada. Gunakan ID yang berbeda.";
        }
    }
}

elseif ($action === 'edit') {
    // Menampilkan form edit
    $id = $_GET['id'];
    $dpr = findDPRById($id, $dprArray);

    if ($dpr) {
        displayForm($dpr->get_id(), $dpr->get_nama(), $dpr->get_bidang(), $dpr->get_partai(), $dpr->get_urlphoto());
    }
} elseif ($action === 'delete') {
        // Hapus data
    $id = $_GET['id'];
    $index = array_search(findDPRById($id, $dprArray), $dprArray);
    if ($index !== false) {
        array_splice($dprArray, $index, 1);
    }

}

// Menampilkan tabel data
displayTable($dprArray);

?>
