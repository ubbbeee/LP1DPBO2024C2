/* Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
   kuliah Strukdat untuk keberkahanNya maka saya tidak
   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin*/
public class DPR {
    // Atribut privat yang menyimpan informasi mengenai anggota DPR.
    private int id;
    private String nama;
    private String bidang;
    private String partai;

    // Konstruktor default untuk objek DPR. Inisialisasi atribut dengan nilai default.
    public DPR() {
        this.id = 0;
        this.nama = "";
        this.bidang = "";
        this.partai = "";
    }

    // Konstruktor parameter untuk objek DPR. Menginisialisasi objek dengan nilai yang diberikan.
    public DPR(int id, String nama, String bidang, String partai) {
        this.id = id;
        this.nama = nama;
        this.bidang = bidang;
        this.partai = partai;
    }

    // Getter untuk mendapatkan nilai atribut id.
    public int getId() {
        return this.id;
    }

    // Setter untuk mengatur nilai atribut id.
    public void setId(int id) {
        this.id = id;
    }

    // Getter untuk mendapatkan nilai atribut nama.
    public String getNama() {
        return this.nama;
    }

    // Setter untuk mengatur nilai atribut nama.
    public void setNama(String nama) {
        this.nama = nama;
    }

    // Getter untuk mendapatkan nilai atribut bidang.
    public String getBidang() {
        return this.bidang;
    }

    // Setter untuk mengatur nilai atribut bidang.
    public void setBidang(String bidang) {
        this.bidang = bidang;
    }

    // Getter untuk mendapatkan nilai atribut partai.
    public String getPartai() {
        return this.partai;
    }

    // Setter untuk mengatur nilai atribut partai.
    public void setPartai(String partai) {
        this.partai = partai;
    }

    // Destruktor untuk membersihkan sumber daya jika diperlukan.
    // Tidak diperlukan dalam contoh ini karena Java memiliki garbage collection.
}
