# Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
#   kuliah Strukdat untuk keberkahanNya maka saya tidak
#   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin
from DPR import DPR
if __name__ == "__main__":
    # Membuat objek list untuk menyimpan data DPR.
    dprList = [] 

    # Instansiasi objek menggunakan default konstruktor dan get set
    member = DPR()
    member.set_id(1)
    member.set_nama("Ganjar")
    member.set_bidang("Pertanian")
    member.set_partai("PDIP")
    dprList.append(member)  # Menambahkan objek DPR ke dalam list.

    n = 1

    while n != 0:
        # Menampilkan menu pilihan.
        print("+------------------------------+")
        print("|      SILAHKAN PILIH MENU     |")
        print("+------------------------------+")
        print("| TAMPILKAN ANGGOTA DPR KETIK 1|")
        print("| TAMBAH ANGGOTA DPR KETIK 2   |")
        print("| HAPUS ANGGOTA DPR KETIK 3    |")
        print("| RUBAH ANGGOTA DPR KETIK 4    |")
        print("| GAJADI KETIK 0               |")
        print("+------------------------------+")

        n = int(input("Masukkan pilihan menu: "))

        if n == 1:
            # Menampilkan daftar anggota DPR.
            print("+-------------------------------------+")
            print("|           LIST ANGGOTA DPR          |")
            print("+------+--------+----------+----------+")
            print("|  ID  |  NAMA  |  BIDANG  |  PARTAI  |")
            print("+------+--------+----------+----------+")
            for dpr in dprList:
                print(f"|{dpr.get_id():<6}|{dpr.get_nama():<8}|{dpr.get_bidang():<10}|{dpr.get_partai():<10}|")
            print("+-------------------------------------+")
            
            # Meminta konfirmasi selesai atau tidak.
            validasi = input("SUDAH SELESAI? inputkan Y JIKA BELUM inputkan N: ")
            if validasi == 'N':
                continue  # Kembali ke atas loop jika belum selesai.
            else:
                n = 0  # Keluar dari loop jika sudah selesai.

        elif n == 2:
            # Menambahkan anggota DPR baru.
            tambah = int(input("Masukkan jumlah data anggota DPR yang ingin ditambahkan: "))
            print("Masukkan data anggota DPR yang ingin ditambahkan: ")

            for i in range(tambah):
                temp = DPR()
                # Mengambil data anggota DPR dari pengguna.
                id = int(input())
                nama = input()
                bidang = input()
                partai = input()
                # Memeriksa apakah ID sudah ada atau belum.
                if any(dpr.get_id() == id for dpr in dprList):
                    print("Input id tidak valid atau id sudah ada pada list. Data tidak ditambahkan.")
                else:
                    # Menyimpan data anggota DPR baru.
                    temp.set_id(id)
                    temp.set_nama(nama)
                    temp.set_bidang(bidang)
                    temp.set_partai(partai)

                    dprList.append(temp)  # Tambahkan ke list
                    print("Data berhasil ditambahkan")

            n = 1  # Kembali ke atas loop untuk menampilkan daftar setelah penambahan.

        elif n == 3:
            # Menghapus anggota DPR berdasarkan ID.
            id_hapus = int(input("Masukkan ID anggota DPR yang ingin dihapus: "))

            found = False  # Variabel untuk menandai apakah ID ditemukan atau tidak
            flagcase3 = 0  # Inisialisasi flag untuk menghentikan perulangan

            for dpr in dprList:
                if dpr.get_id() == id_hapus:
                    dprList.remove(dpr)
                    print(f"Anggota DPR dengan ID {id_hapus} berhasil dihapus.")
                    found = True  # Menandai bahwa ID ditemukan dan data berhasil dihapus
                    flagcase3 = 1  # Set flag untuk menghentikan perulangan

            if not found:
                print("ID tidak ditemukan. Silahkan inputkan ID yang lain.")
            else:
                print("Data berhasil dihapus")

            n = 1 if flagcase3 == 1 else 0  # Set n sesuai dengan kondisi flag


        elif n == 4:
            # Mengubah data anggota DPR berdasarkan ID
            id_ubah = int(input("Masukkan ID anggota DPR yang ingin diubah: "))

            found_ubah = False  # Inisialisasi variabel untuk menandai apakah ID ditemukan
            flagcase4 = 0  # Inisialisasi flag untuk menghentikan perulangan

            for dpr in dprList:
                if dpr.get_id() == id_ubah:
                    # Jika ID anggota DPR ditemukan, minta input data baru
                    print("Masukkan data baru: ")
                    nama_baru = input()
                    bidang_baru = input()
                    partai_baru = input()
                    # Mengubah data anggota DPR dengan data baru
                    dpr.set_nama(nama_baru)
                    dpr.set_bidang(bidang_baru)
                    dpr.set_partai(partai_baru)

                    print(f"Data anggota DPR dengan ID {id_ubah} berhasil diubah.")
                    found_ubah = True
                    flagcase4 = 1  # Set flag untuk menghentikan perulangan

            if found_ubah:
                print("Data berhasil diubah")
            else:
                print("ID tidak ditemukan. Silahkan inputkan ID yang lain.")

            n = 1 if flagcase4 == 1 else 0  # Set n sesuai dengan kondisi flag


        elif n == 0:
            break

        else:
            print("Menu dengan input tersebut tidak ada. Silahkan pilih yang lain.")