# Website Dinas Pendidikan Pemuda dan Olahraga — Bidang SMP

Website dinamis berbasis PHP + MySQL/MariaDB dengan:
- Beranda publik
- Profil Bidang SMP
- Berita
- Agenda
- Data sekolah
- Dokumen/download
- Galeri
- Kontak
- Login admin
- Dashboard admin
- CRUD berita, agenda, sekolah, dokumen, galeri, dan pengaturan situs
- Tampilan responsif dan mudah diedit

## Instalasi XAMPP
1. Salin folder `website_dinas_pendidikan_smp` ke `htdocs/`.
2. Buat database MySQL bernama `dinas_smp`.
3. Import `database/dinas_smp.sql` melalui phpMyAdmin.
4. Edit `config/database.php` bila username/password MySQL berbeda.
5. Buka `http://localhost/website_dinas_pendidikan_smp/`
6. Admin: `http://localhost/website_dinas_pendidikan_smp/admin/login.php`

Akun awal:
- username: `admin`
- password: `admin123`

Segera ganti password setelah instalasi.
