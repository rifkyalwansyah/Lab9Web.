## Praktikum 9: PHP Modular

### Tujuan
1. Memahami konsep dasar modularisasi program pada PHP.
2. Memahami penggunaan fungsi `require` untuk modularisasi.
3. Mengimplementasikan modularisasi pada program CRUD (praktikum 8).

### Langkah-Langkah Pengerjaan

1. **Membuat File Template Modular**
   - Membuat `header.php` untuk bagian awal halaman.
   - Membuat `footer.php` untuk bagian akhir halaman.

2. **Mengintegrasikan Modularisasi ke Program CRUD**
   - Menambahkan `require('header.php');` di awal file.
   - Menambahkan `require('footer.php');` di akhir file.
   - Menghapus elemen HTML redundant seperti `<html>`, `<head>`, `<body>`, dan `<footer>`.

3. **Menguji Program**
   - Membuka setiap halaman (`index.php`, `tambah.php`, `ubah.php`, `hapus.php`) di browser.
   - Memastikan navigasi dari `header.php` dan footer dari `footer.php` ditampilkan di semua halaman.

### Screenshot Hasil
1. **Tampilan Halaman Utama (index.php)
![image](https://github.com/user-attachments/assets/134328a1-9523-4f75-951c-6f097bf3411a)

2. **Tampilan Halaman Tambah Barang (tambah.php)
![image](https://github.com/user-attachments/assets/cc91cd87-eb5e-430b-98f0-a36ca9d69867)
![image](https://github.com/user-attachments/assets/ac7ce297-81c4-4a42-a672-8f7a2f4c389b)

3. **Tampilan Halaman Ubah Barang (ubah.php)
   ![image](https://github.com/user-attachments/assets/618c39f0-689f-45f0-a10f-7aa15f6aae58)

### Kesimpulan
1. Modularisasi membuat struktur kode lebih rapi dan terorganisir.
2. Dengan memanfaatkan `header.php` dan `footer.php`, elemen HTML yang sama dapat digunakan di semua halaman tanpa pengulangan.
3. Implementasi modularisasi berhasil diterapkan pada program CRUD dari praktikum 8.
