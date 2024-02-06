# LP1DPBO2024C2
Latihan Praktikum OOP C2 Alfen Fajri Nurulhaq 2201431
Materi Class & Encapsulation

Desain Program:

Kelas DPR (DPR.cpp):

Atribut:

id: Menyimpan ID unik anggota DPR.
nama: Menyimpan nama anggota DPR.
bidang: Menyimpan bidang tugas anggota DPR.
partai: Menyimpan partai politik anggota DPR.

Methods:

Konstruktor default dan parameter untuk inisialisasi objek DPR.
Getter dan setter untuk mengakses dan mengubah nilai atribut.
Destruktor (kosong karena tidak ada sumber daya yang perlu dibebaskan).

Program Utama (main.cpp):

Variabel:

llist: Linked list dari objek DPR untuk menyimpan anggota DPR.
n: Variabel untuk memilih menu.
validasi: Variabel untuk validasi apakah program telah selesai.
id, nama, bidang, partai: Variabel untuk menyimpan input data anggota DPR.
Alur Program:

Mendeklarasikan objek llist sebagai linked list dari objek DPR.

Memasukkan data dummy ke dalam linked list.

Menampilkan menu kepada pengguna dan meminta input menu.

Menggunakan loop while untuk menjalankan program hingga pengguna memilih keluar (n = 0).

Masing-masing pilihan menu (1, 2, 3, 4) memiliki alur eksekusi sendiri.

Menu 1 - Tampilkan Anggota DPR:
Menampilkan data anggota DPR menggunakan iterator pada linked list.
Meminta pengguna untuk mengonfirmasi apakah program sudah selesai.

Menu 2 - Tambah Anggota DPR:
Meminta jumlah data yang ingin ditambahkan.
Menggunakan loop untuk meminta input data anggota DPR sebanyak yang diinginkan.
Memvalidasi input dan menambahkan data ke linked list jika valid.

Menu 3 - Hapus Anggota DPR:
Meminta ID anggota DPR yang ingin dihapus.
Menggunakan iterator untuk mencari dan menghapus anggota DPR dengan ID tersebut.
Memberikan feedback apakah data berhasil dihapus atau tidak.

Menu 4 - Ubah Anggota DPR:
Meminta ID anggota DPR yang ingin diubah.
Menggunakan iterator untuk mencari dan mengubah data anggota DPR dengan ID tersebut.
Memberikan feedback apakah data berhasil diubah atau tidak.

Menu Lain atau Input Salah:
Memberikan pesan feedback jika input menu tidak valid.
Memvalidasi apakah pengguna telah selesai dengan program. Jika belum, kembali ke pemilihan menu.

Alur Eksekusi:

- Program dimulai dengan mendeklarasikan objek llist dan memasukkan data dummy ke dalamnya.
- Menampilkan menu kepada pengguna dan meminta input menu.
- Loop while akan berlanjut selama pengguna belum memilih keluar (n = 0).
- Pilihan menu akan dieksekusi sesuai dengan input pengguna.
- Setelah eksekusi menu selesai, program memvalidasi apakah pengguna sudah selesai atau ingin memilih menu kembali.
- Jika pengguna belum selesai, program akan kembali ke langkah 2.
- Jika pengguna sudah selesai, program akan keluar dari loop dan program selesai.

Desain program ini memanfaatkan konsep objek dan linked list untuk menyimpan dan mengelola data anggota DPR. Validasi input dan memberikan feedback kepada pengguna telah diimplementasikan untuk meningkatkan keamanan dan interaktivitas program. Program memberikan fleksibilitas dalam menambah, menghapus, dan mengubah data anggota DPR sesuai dengan kebutuhan pengguna.
