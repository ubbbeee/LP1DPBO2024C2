
<?php
// Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
//   kuliah Strukdat untuk keberkahanNya maka saya tidak
//   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin
// Class DPR merupakan representasi dari anggota Dewan Perwakilan Rakyat (DPR) dalam program.
class DPR
{
    // Atribut privat yang menyimpan informasi mengenai anggota DPR.
    private $id = 0;
    private $nama = "";
    private $bidang = "";
    private $partai = "";
    private $urlphoto = "";

    // Konstruktor parameter untuk objek DPR. Menginisialisasi objek dengan nilai yang diberikan.
    public function __construct($id = 0, $nama = "", $bidang = "", $partai = "", $urlphoto = "")
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->bidang = $bidang;
        $this->partai = $partai;
        $this->urlphoto = $urlphoto;
    }

    // Getter untuk mendapatkan nilai atribut id.
    public function get_id()
    {
        return $this->id;
    }

    // Setter untuk mengatur nilai atribut id.
    public function set_id($id)
    {
        $this->id = $id;
    }

    // Getter untuk mendapatkan nilai atribut nama.
    public function get_nama()
    {
        return $this->nama;
    }

    // Setter untuk mengatur nilai atribut nama.
    public function set_nama($nama)
    {
        $this->nama = $nama;
    }

    // Getter untuk mendapatkan nilai atribut bidang.
    public function get_bidang()
    {
        return $this->bidang;
    }

    // Setter untuk mengatur nilai atribut bidang.
    public function set_bidang($bidang)
    {
        $this->bidang = $bidang;
    }

    // Getter untuk mendapatkan nilai atribut partai.
    public function get_partai()
    {
        return $this->partai;
    }

    // Setter untuk mengatur nilai atribut partai.
    public function set_partai($partai)
    {
        $this->partai = $partai;
    }

    public function get_urlphoto()
    {
        return $this->urlphoto;
    }

    public function set_urlphoto($urlphoto)
    {
        $this->urlphoto = $urlphoto;
    }


    // Destruktor untuk membersihkan sumber daya jika diperlukan.
    public function __destruct()
    {
        // Implementasi destruktor jika diperlukan.
    }
}

?>
