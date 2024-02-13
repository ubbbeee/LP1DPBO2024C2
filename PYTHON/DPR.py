# Saya Alfen Fajri Nurulhaq (2201431) mengerjakan Latihan Prakitum 1 OOP class & encapsulation dalam mata
#   kuliah Strukdat untuk keberkahanNya maka saya tidak
#   melakukan kecurangan seperti yang telah dispesikasikan.Aamiin
class DPR:
    __id = 0
    __nama = ""
    __bidang = ""
    __partai = ""
    # Atribut privat yang menyimpan informasi mengenai anggota DPR.
    def __init__(self, id=0, nama="", bidang="", partai=""):
        self._id = id
        self._nama = nama
        self._bidang = bidang
        self._partai = partai

    # Getter untuk mendapatkan nilai atribut id.
    def get_id(self):
        return self._id

    # Setter untuk mengatur nilai atribut id.
    def set_id(self, id):
        self._id = id

    # Getter untuk mendapatkan nilai atribut nama.
    def get_nama(self):
        return self._nama

    # Setter untuk mengatur nilai atribut nama.
    def set_nama(self, nama):
        self._nama = nama

    # Getter untuk mendapatkan nilai atribut bidang.
    def get_bidang(self):
        return self._bidang

    # Setter untuk mengatur nilai atribut bidang.
    def set_bidang(self, bidang):
        self._bidang = bidang

    # Getter untuk mendapatkan nilai atribut partai.
    def get_partai(self):
        return self._partai

    # Setter untuk mengatur nilai atribut partai.
    def set_partai(self, partai):
        self._partai = partai
