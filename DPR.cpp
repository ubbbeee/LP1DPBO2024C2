/* Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
   kuliah Strukdat untuk keberkahanNya maka saya tidak
   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin*/
#include <iostream> 
#include <string>

using namespace std;

// Class DPR merupakan representasi dari anggota Dewan Perwakilan Rakyat (DPR) dalam program.
class DPR
{
private:
// Atribut privat yang menyimpan informasi mengenai anggota DPR.
    int id;
    string nama;
    string bidang;
    string partai;

public:
// Konstruktor default untuk objek DPR. Inisialisasi atribut dengan nilai default.
    DPR()
    {
        this->id = 0;
        this->nama = "";
        this->bidang = "";
        this->partai = "";
    }
// Konstruktor parameter untuk objek DPR. Menginisialisasi objek dengan nilai yang diberikan.
    DPR(int id, string nama, string bidang, string partai)
    {
        this->id = id;
        this->nama = nama;
        this->bidang = bidang;
        this->partai = partai;
    }
// Getter untuk mendapatkan nilai atribut id.
    int get_id() const // id harus unik
    {
        return this->id;
    }
// Setter untuk mengatur nilai atribut id.
    void set_id(int id)
    {
        this->id = id;
    }
// Getter untuk mendapatkan nilai atribut nama.
    string get_nama()
    {
        return this->nama;
    }
// Setter untuk mengatur nilai atribut nama.
    void set_nama(string nama)
    {
        this->nama = nama;
    }
// Getter untuk mendapatkan nilai atribut bidang.
    string get_bidang()
    {
        return this->bidang;
    }
// Setter untuk mengatur nilai atribut bidang.
    void set_bidang(string bidang)
    {
        this->bidang = bidang;
    }
// Getter untuk mendapatkan nilai atribut partai.
    string get_partai()
    {
        return this->partai;
    }
// Setter untuk mengatur nilai atribut partai.
    void set_partai(string partai)
    {
        this->partai = partai;
    }
// Destruktor untuk membersihkan sumber daya jika diperlukan.
    ~DPR()
    {

    }
};