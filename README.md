## Nama Aplikasi
Project Laravel App-Perpustakaan adalah aplikasi manajemen perpustakaan berbasis web yang dirancang untuk mengotomatisasi dan mempermudah pengelolaan data serta operasional harian perpustakaan, seperti pendataan buku, anggota, dan transaksi peminjaman.
# Tujuan Aplikasi
1. Digitalisasi & Efisiensi Data: Mengubah pencatatan manual berbasis kertas atau spreadsheet menjadi sistem terpusat, sehingga data buku, anggota, dan transaksi dapat dicari dan diperbarui secara instan.
2. Akurasi Operasional: Meminimalkan risiko kesalahan manusia (human error) dalam mencatat peminjaman, menghitung masa pinjam, serta menghitung denda keterlambatan secara otomatis.
3. Pengawasan & Transparansi: Memudahkan pihak pengelola atau sekolah dalam memantau sirkulasi buku, stok ketersediaan, serta melihat laporan aktivitas perpustakaan secara real-time.
4. Peningkatan Layanan: Mempercepat proses pelayanan di meja sirkulasi sehingga anggota tidak perlu menunggu lama saat meminjam atau mengembalikan buku.
# Cara Menjalankan
Prasyarat: PHP >= 8.2, Composer, dan Git.

bash
git clone https://github.com/ArdineSB/app-perpustakaan.git
cd app-perpustakaan
git checkout dev
composer install
copy .env.example .env
php artisan key:generate
php artisan serve


Lalu buka http://127.0.0.1:8000 di browser. Halaman welcome Laravel akan tampil kalau setup berhasil.

Konfigurasi database ada di file .env (DB_DATABASE=db_perpustakaan). Koneksi database baru dipakai mulai Pertemuan 5.
