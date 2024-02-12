/* Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
   kuliah Strukdat untuk keberkahanNya maka saya tidak
   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin*/
import java.util.*;//import library
import java.util.Scanner;
import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);//untuk inputan user
        List<DPR> dprList = new LinkedList<>();// Membuat objek LinkedList untuk menyimpan data DPR.
        //instansiasi objek menggunakan default kontruktor dan get set
        DPR member = new DPR();
        member.setId(1);
        member.setNama("Ganjar");
        member.setBidang("Pertanian");
        member.setPartai("PDIP");
        dprList.add(member);// Menambahkan objek DPR ke dalam list.

        int n;

        do {
            // Menampilkan menu pilihan.
            System.out.println("+------------------------------+");
            System.out.println("|      SILAHKAN PILIH MENU     |");
            System.out.println("+------------------------------+");
            System.out.println("| TAMPILKAN ANGGOTA DPR KETIK 1|");
            System.out.println("| TAMBAH ANGGOTA DPR KETIK 2   |");
            System.out.println("| HAPUS ANGGOTA DPR KETIK 3    |");
            System.out.println("| RUBAH ANGGOTA DPR KETIK 4    |");
            System.out.println("| GAJADI KETIK 0               |");
            System.out.println("+------------------------------+");

            n = scanner.nextInt();// Mengambil pilihan menu dari pengguna.

            switch (n) {
                case 1:
                    // Menampilkan daftar anggota DPR.
                    System.out.println("+-------------------------------------+");
                    System.out.println("|           LIST ANGGOTA DPR          |");
                    System.out.println("+------+--------+----------+----------+");
                    System.out.println("|  ID  |  NAMA  |  BIDANG  |  PARTAI  |");
                    System.out.println("+------+--------+----------+----------+");
                    for (DPR dpr : dprList) {
                    System.out.printf("|%-6d|%-8s|%-10s|%-10s|\n", dpr.getId(), dpr.getNama(), dpr.getBidang(), dpr.getPartai());
                    }
                    System.out.println("+-------------------------------------+");
                    // Meminta konfirmasi selesai atau tidak.
                    System.out.println("SUDAH SELESAI? inputkan Y JIKA BELUM inputkan N");
                    char validasi = scanner.next().charAt(0);

                    if (validasi == 'N') {
                        continue;// Kembali ke atas loop jika belum selesai.
                    } else {
                        n = 0;// Keluar dari loop jika sudah selesai.
                    }
                    break;

                case 2:
                    // Menambahkan anggota DPR baru.
                    System.out.println("Masukkan jumlah data anggota DPR yang ingin ditambahkan: ");
                    int tambah = scanner.nextInt();
                    System.out.println("Masukkan data anggota DPR yang ingin ditambahkan: ");

                    for (int i = 0; i < tambah; i++) {
                        DPR temp = new DPR();
                        // Mengambil data anggota DPR dari pengguna.
                        int id = scanner.nextInt();
                        String nama = scanner.next();
                        String bidang = scanner.next();
                        String partai = scanner.next();
                        // Memeriksa apakah ID sudah ada atau belum.
                        if (dprList.stream().anyMatch(dpr -> dpr.getId() == id)) {
                            System.out.println("Input id tidak valid atau id sudah ada pada list. Data tidak ditambahkan.");
                        } else {
                            // Menyimpan data anggota DPR baru.
                            temp.setId(id);
                            temp.setNama(nama);
                            temp.setBidang(bidang);
                            temp.setPartai(partai);

                            dprList.add(temp);//tambahkan ke list
                            System.out.println("Data berhasil ditambahkan");
                        }
                    }

                    n = 1;// Kembali ke atas loop untuk menampilkan daftar setelah penambahan.
                    break;

                case 3:
                    // Menghapus anggota DPR berdasarkan ID.
                    System.out.println("Masukkan ID anggota DPR yang ingin dihapus: ");
                    int idHapus = scanner.nextInt();//masukkin ID

                    boolean found = false;// Variabel untuk menandai apakah ID ditemukan atau tidak
                    Iterator<DPR> iterator = dprList.iterator(); // Iterator digunakan untuk mengakses elemen-elemen dalam List
                    // Melakukan iterasi melalui List anggota DPR menggunakan Iterator
                    int flagcase3 = 0;
                    while (iterator.hasNext() && flagcase3 == 0) {
                        DPR dpr = iterator.next();// Mendapatkan elemen DPR berikutnya dari List
                        if (dpr.getId() == idHapus) {// Memeriksa apakah ID anggota DPR cocok dengan yang diminta untuk dihapus
                            iterator.remove();// Menghapus anggota DPR dari List menggunakan Iterator
                            System.out.println("Anggota DPR dengan ID " + idHapus + " berhasil dihapus.");
                            found = true;// Menandai bahwa ID ditemukan dan data berhasil dihapus
                            if(found == true){
                                flagcase3 = 1;
                            }// Keluar dari loop karena anggota DPR dengan ID yang diminta sudah dihapus
                        }
                    }

                    if (!found) {
                        System.out.println("ID tidak ditemukan. Silahkan inputkan ID yang lain.");
                    } else {
                        System.out.println("Data berhasil dihapus");
                    }

                    n = 1;
                    break;

                    case 4:
                    // Mengubah data anggota DPR berdasarkan ID
                    System.out.println("Masukkan ID anggota DPR yang ingin diubah: ");
                    int idUbah = scanner.nextInt();// Mengambil input ID anggota DPR yang ingin diubah

                    boolean foundUbah = false;// Inisialisasi variabel untuk menandai apakah ID ditemukan
                    int flagcase4 = 0;// Inisialisasi flag untuk mengakhiri perulangan jika ID ditemukan

                    for (int i = 0; i < dprList.size() && flagcase4 == 0; i++) {
                    DPR dpr = dprList.get(i);// Mengambil anggota DPR pada indeks ke-i

                        if (dpr.getId() == idUbah) {
                            // Jika ID anggota DPR ditemukan, minta input data baru
                        System.out.println("Masukkan data baru: ");
                        String namaBaru = scanner.next();
                        String bidangBaru = scanner.next();
                        String partaiBaru = scanner.next();
                        // Mengubah data anggota DPR dengan data baru
                        dpr.setNama(namaBaru);
                        dpr.setBidang(bidangBaru);
                        dpr.setPartai(partaiBaru);

                        System.out.println("Data anggota DPR dengan ID " + idUbah + " berhasil diubah.");
                        foundUbah = true;
                        flagcase4 = 1; // Set flag untuk menandai bahwa perubahan berhasil dilakukan
                        }
                    }
    
                    if (foundUbah) {
                         // Jika ID ditemukan, tampilkan pesan berhasil diubah
                    System.out.println("Data berhasil diubah");
                    } else {
                         // Jika ID tidak ditemukan, tampilkan pesan ID tidak ditemukan
                    System.out.println("ID tidak ditemukan. Silahkan inputkan ID yang lain.");
                    }

                    n = 1; // Set n menjadi 1 agar kembali ke menu utama
                    break;


                default:
                    System.out.println("Menu dengan input tersebut tidak ada silahkan pilih yang lain.");
                    break;
            }

        } while (n != 0);

        scanner.close();// Menutup scanner untuk menghindari memory leak.
    }
}
