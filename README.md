# Pesat
Pesat Website Sekolah untuk melihat informasi mengenai sekolah pesat lebih detail mulai dari Guru, siswa hingga eskul yang ada di Sekolah Pesat

**Admin**
Gunakan /login untuk melakukan Login ke dashboard admin

**Akses Admin**
Mengelola CRUD : 
- Siswa
- Guru
- Eskul
- Galeri
- Berita
- Profile Sekolah

**Lakukan Step2 ini Setelah clone agar code bisa di gunakan (Lakukan Pada Folder di CMD)**
1. npm install && npm run build
2. composer install
3. copy .env.example .env
4. php artisan key:generate
5. npm run dev

**Step2 pada Terminal Code Editor kalian**
1. php artisan migrate
2. php artisan db:seed --class=UserSeeder
3. php artisan storage:link
4. php artisan serve

**Copy Pada env**
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Pesat
DB_USERNAME=root
DB_PASSWORD=

**Version Requirement** For Laravel 12
PHP : 8.2 atau di atasnya

**Ekstensi PHP** : 
- Cypte
- Fileinfo
- JSON
- Mbstring
- OPENSSL
- PDO
- Tokenizer
- XML
