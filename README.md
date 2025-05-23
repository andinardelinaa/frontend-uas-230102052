# 🌐 SISTEM PENGAJUAN CUTI MAHASISWA


**Andin Ardelina Saputri**  
Informatics Engineering — Politeknik Negeri Cilacap  
GitHub: [@andinardelina](https://github.com/andinardelinaa)  
LinkedIn: [linkedin.com/in/andinardelina](https://linkedin.com/in/andinardelina)

## 1. Deskripsi Proyek
Sistem ini berisi CRUD data User dan Data Kajur Create, Read, Update, Delete 

## 3.  Clone the Repository Backend Soal Tipe D
Clone repository backend dari GitHub:

```bash
https://github.com/Alledanaralle/PBF.git
cd PBF
```
### 2️. Install dependensi

Install semua dependensi yang dibutuhkan menggunakan Composer:

```bash
composer install
```
 ## 3. konfigurasi file .env
 
 ```bash
cp .env.example .env
```

### 4.  Run Server dalam Backend

```bash
php spark serve 
```
Server akan berjalan di:
🔗 http://127.0.0.1:8080.

### 5.  Import Database
🔗 Link Repository Database
https://github.com/andinardelinaa/database

Langkah Import Database:
1. Download file .sql dari repository tersebut.
2. Buka phpMyAdmin.
3. buat db dengan nama db_uas_230102052
4. Pilih database tujuan, lalu klik tab Import.
5. Upload file .sql yang sudah didownload.
6. Klik tombol Go untuk memulai proses import.

### 6. Cek Endpoint API menggunakan postman

A. User

- GET user : http://localhost:8080/user
- POST user : http://localhost:8080/user
- PUT user : http://localhost:8080/user/{id_user}
- DELETE user : http://localhost:8080/user/{id_user}

B. Kajur

- GET kajur : http://localhost:8080/kajur
- POST kajur : http://localhost:8080/kajur
- PUT kajur : http://localhost:8080/kajur/{id_kajur}
- DELETE kajur : http://localhost:8080/kajur/{id_kajur}


## 7.  Buat Project Laravel di Laragon

```bash
composer create-project laravel/laravel:^10 frontend-uas-230102052
cd laravel-FE-KRS
```
```bash
composer install
```
## 8. copy file env

```bash
cp .env.example .env
```
APP_NAME=Laravel
APP_URL=http://localhost:8000
SESSION_DRIVER=file

menjalankan server Front-End dengan perintah :

```bash
php artisan serve
```
Server berjalan di:
🔗 http://127.0.0.1:8000

## 9. Cara Menjalankan Project
1. pastikan server Backend sudah di nyalakan dengan menggunakan perintah
   ```bash
   php spark serve
   ```
   Server akan berjalan di:
🔗 http://127.0.0.1:8080.

 2. nyalakan server Frontend
   ```bash
   php artisan serve
  ```
Server berjalan di:
🔗 http://127.0.0.1:8000

## 10.  Cara push di Github
1. git init
2. git remote add origin https://github.com/username/nama-repo.git
3. git add .
4. git commit -m "First commit"
5. git branch -M main
git push -u origin main
6. git push origin main








