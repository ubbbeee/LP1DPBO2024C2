/* Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
   kuliah Strukdat untuk keberkahanNya maka saya tidak
   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin*/
#include <bits/stdc++.h>
#include "DPR.cpp"

using namespace std;

int main()
{
    DPR member;

    // set data dummy
    member.set_id(1);
    member.set_nama("Ganjar");
    member.set_bidang("Pertanian");
    member.set_partai("PDIP");
    // DPR ganjar("Ganjar", 'L');

    int i, n; // untuk masukkan menu

    //deklarasi variable
    int id;
    string nama;
    string bidang;
    string partai;

    list<DPR> llist;   //deklarasi sebuah objek llist yang merupakan suatu linked list dari objek-objek yang memiliki tipe DPR.
    llist.push_back(member); // masukkin data dummy
    //instruksi menu
    cout << '\n'
         << "Silahkan Pilih Menu " << '\n';
    cout << "TAMPILKAN ANGGOTA DPR KETIK 1" << '\n';
    cout << "TAMBAH ANGGOTA DPR KETIK 2"
         << "\n";
    cout << "HAPUS ANGGOTA DPR KETIK 3" << '\n';
    cout << "RUBAH ANGGOTA DPR KETIK 4" << '\n';
    cout << "GAJADI KETIK 0" << '\n';
    cin >> n;

    char validasi;//char buat validasi udah selesai belum programnya
    while (n != 0)
    {
        // if (validasi == 'Y')//cek selesai
        // {
        //     n = 0;
        // }
        if (n == 1)
        { // kode untuk tampilkan data
            cout << "LIST ANGGOTA DPR " << '\n';
            // i = 0;
            for (list<DPR>::iterator it = llist.begin(); it != llist.end(); it++) // perulangan untuk menampilkan data
            {
                cout << it->get_id() << "."
                     << " | " << it->get_nama() << " | " << it->get_bidang() << " | " << it->get_partai() << " | " << '\n';
                // i++;
            }
            // n = 0;
            cout << "SUDAH SELESAI? inputkan Y JIKA BELUM inputkan N" << '\n'; // cek validasi selesai atau belum
            cin >> validasi;

            if (validasi == 'N') // kalau belum selesai pilih menu kembali
            {
                cout << "Silahkan Pilih Menu Kembali\n";
                cout << "TAMPILKAN ANGGOTA DPR KETIK 1" << '\n';
                cout << "TAMBAH ANGGOTA DPR KETIK 2"
                     << "\n";
                cout << "HAPUS ANGGOTA DPR KETIK 3" << '\n';
                cout << "RUBAH ANGGOTA DPR KETIK 4" << '\n';
                cout << "JIKA SUDAH SELESAI KETIK 0" << '\n';
                cin >> n;
                continue; // Kembali ke awal loop
            }
            else//kalau Y maka perulangan berhenti dan program selesai
            {
                n = 0;
            }
        }
        else if (n == 2)
        { // kode tambah data
            cout << "Masukkan jumlah data anggota DPR yang ingin ditambahkan: \n";
            int tambah;
            cin >> tambah;
            cout << "Masukkan data anggota DPR yang ingin ditambahkan: \n";

            for (int i = 0; i < tambah; i++)
            {
                DPR temp;

                // Memasukkan nilai id, nama, bidang, dan partai dari pengguna.
                cin >> id >> nama >> bidang >> partai;

                // Mengecek apakah id merupakan angka dan id belum ada pada list.
                if (!cin || llist.end() != find_if(llist.begin(), llist.end(), [id](const DPR &dpr)
                                                   { return dpr.get_id() == id; }))
                {
                    cout << "Input id tidak valid atau id sudah ada pada list. Data tidak ditambahkan.\n";
                    cin.clear();                                         // Membersihkan status kesalahan input.
                    cin.ignore(numeric_limits<streamsize>::max(), '\n'); // Mengabaikan karakter sampai newline.
                }
                else
                {//masukkin data tambahan
                    temp.set_id(id);
                    temp.set_nama(nama);
                    temp.set_bidang(bidang);
                    temp.set_partai(partai);

                    llist.push_back(temp);
                    cout << "Data berhasil ditambahkan\n";
                }
            }

            n = 1;//tiap menu akan selalu kembali ke tampilan list supaya tahu apa ada perubahan atau tidak
        }

        else if (n == 3)
        { // kode untuk menghapus data dari salah satu baris data misal id nya 3 nama ganjar bidang politik partai PDIP
          // jadi data 3 ganjar politik PDIP dihapus
            cout << "Masukkan ID anggota DPR yang ingin dihapus: \n";
            cin >> id;

            int flag = 0;
            auto it = llist.begin();//auto digunakan untuk memberi tipe data otomatis, Inisialisasi iterator it dengan posisi awal pada elemen pertama dari linked list llist.

            while (it != llist.end() && flag == 0) // Perulangan akan berjalan selama iterator it belum mencapai elemen terakhir dari linked list (llist.end()) dan variabel flag masih 0.
            {
                if (it->get_id() == id) // ambil berdasarkan id
                {
                    it = llist.erase(it); // Hapus elemen dari list menggunakan erase
                    cout << "Anggota DPR dengan ID " << id << " berhasil dihapus.\n";
                    flag = 1; // Set flag agar while berhenti
                }
                else
                {
                    ++it; // Pindah ke elemen berikutnya jika ID tidak cocok
                }
            }

            if (flag == 0) // cek bila id ditemukan kalau gaada
            {
                cout << "ID tidak ditemukan. Silahkan inputkan ID yang lain.\n";
            }
            else // kalau ada
            {
                cout << "Data berhasil dihapus\n";
            }
            n = 1;
        }
        else if (n == 4)
        { // buat kode untuk merubah data dari salah satu atribut
            cout << "Masukkan ID anggota DPR yang ingin diubah: \n";
            cin >> id;

            int flag = 0;//flagging untuk id ditemukan atau tidaknya
            auto it = llist.begin();//auto digunakan untuk memberi tipe data otomatis, Inisialisasi iterator it dengan posisi awal pada elemen pertama dari linked list llist.

            while (it != llist.end() && flag == 0)// Perulangan akan berjalan selama iterator it belum mencapai elemen terakhir dari linked list (llist.end()) dan variabel flag masih 0.
            {
                if (it->get_id() == id)//cek apakah id ditemukan dan sama
                {
                    cout << "Masukkan data baru: \n";
                    cin >> nama >> bidang >> partai;
                    //baru datanya dimasukkan
                    it->set_nama(nama);
                    it->set_bidang(bidang);
                    it->set_partai(partai);

                    cout << "Data anggota DPR dengan ID " << id << " berhasil diubah.\n";
                    flag = 1; // Set flag agar while berhenti
                }
                else
                {
                    ++it; // Pindah ke elemen berikutnya jika ID tidak cocok
                }
            }

            if (flag == 0) // cek bila id ditemukan kalau gaada
            {
                cout << "ID tidak ditemukan. Silahkan inputkan ID yang lain.\n";
            }
            else // kalau ada
            {
                cout << "Data berhasil dirubah\n";
            }
            n = 1;
        }
        else//kalau user menginputkan yang tidak ada di menu
        {
            cout << "Menu dengan input tersebut tidak ada silahkan pilih yang lain.\n";
            cout << "Silahkan Pilih Menu Kembali\n";
            cout << "TAMPILKAN ANGGOTA DPR KETIK 1" << '\n';
            cout << "TAMBAH ANGGOTA DPR KETIK 2"
                 << "\n";
            cout << "HAPUS ANGGOTA DPR KETIK 3" << '\n';
            cout << "RUBAH ANGGOTA DPR KETIK 4" << '\n';
            cout << "JIKA SUDAH SELESAI KETIK 0" << '\n';
            cin >> n;
            continue; // Kembali ke awal loop
        }
    }
    return 0;
}

// cout << "LIST ANGGOTA DPR " << '\n';
// // i = 0;
// for (list<DPR>::iterator it = llist.begin(); it != llist.end(); it++)
// {
//     cout << it->get_id() << "."
//          << " | " << it->get_nama() << " | " << it->get_bidang() << " | " << it->get_partai() << " | " << '\n';
//     // i++;
// }