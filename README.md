# 🌐 SISTEM PENGAJUAN CUTI MAHASISWA


**Andin Ardelina Saputri**  
Informatics Engineering — Politeknik Negeri Cilacap  
GitHub: [@andinardelina](https://github.com/andinardelinaa)  
LinkedIn: [linkedin.com/in/andinardelina](https://linkedin.com/in/andinardelina)

## Deskripsi Proyek
Sistem ini berisi CRUD data User dan Data Kajur Create, Read, Update, Delete 

## 1.  Clone the Repository Backend Soal Tipe D
Clone repository backend dari GitHub:

```bash
https://github.com/Alledanaralle/PBF.git
cd PBF
```
### 2. Install dependensi

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


## 10. membuat Fitur Search

Fitur ini memungkinkan pengguna mencari data user berdasarkan **username**.

###  Form Pencarian (`user.blade.php`)

```bash
<form method="GET" action="/user" class="mb-4">
  <input type="text" name="search" placeholder="Cari username..." class="px-4 py-2 border rounded-md w-64">
  <button type="submit" class="bg-emerald-500 text-white px-4 py-2 rounded-md ml-2">Cari</button>
</form>

<table class="table-auto w-full mt-4">
  <thead>
    <tr>
      <th class="border px-4 py-2">ID</th>
      <th class="border px-4 py-2">Username</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $data)
    <tr>
      <td class="border px-4 py-2">{{ $data['id'] }}</td>
      <td class="border px-4 py-2">{{ $data['username'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
```

##  Logika di UserController.php
Tambahkan fungsi berikut:

```bash
public function index(Request $request)
{
    $search = $request->query('search');

    $response = Http::get('http://localhost:8080/user');

    if ($response->successful()) {
        $datas = $response->json();

        if ($search) {
            $datas = array_filter($datas, function($item) use ($search) {
                return stripos($item['username'], $search) !== false;
            });
        }
    } else {
        $datas = [];
    }

    return view('user', ['datas' => $datas]);
}
```
# Cara Push Project ke GitHub
Berikut langkah-langkah untuk mengupload project ke GitHub:
### 1. Inisialisasi Git
    
```bash
git init
```

### 2. Tambahkan remote repository

```bash
git remote add origin https://github.com/andinardelinaa/frontend-uas-230102052.git
```
### 3. Tambahkan semua file

```bash
git add .
```

### 4. Commit pertama

```bash
git commit -m "First commit"
```

### 5. Ubah nama branch menjadi main

```bash
git branch -M main
```

### 6. Push ke GitHub

```bash
git push -u origin main
```







