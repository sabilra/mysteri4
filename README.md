Aplikasi Web "Calibre Web"
Sekilas Tentang
Calibre-Web merupakan sebuah aplikasi berbasis web yang menyediakan interface untuk melakukan pencarian, membaca dan mengunduh ebooks menggunakan database Calibre yang sudah ada. 
Instalasi
* Prasyarat, apa saja yang harus diinstal sebelumnya.
Python 2.7+, python 3.x+
* Langkah instalasi dalam CLI.
Konfigurasi
* Dapat mengupload 
* Dapat registrasi secara publik
Otomatisasi
Instalasi Web Server Virtual
1. Membuat VM Ubuntu Server
Membuat VM baru pada VirtualBox dengan tipe "Ubuntu 64-bit", menggunakan virtual disk Ubuntu Server 18.04.
1. Setting Port-Forwarding VM
Tujuannya adalah agar VM bisa diakses dari luar melalui alamat IP host (localhost). Masuk ke 'Settings -> Network -> Advanced -> Port Forwarding' lalu ditambahkan dua aturan berikut.
  

1. Instalasi LAMP (Linux Apache MySQL PHP)
# akses vm dari host
ssh student@localhost -p 2222

# instal apache, mysql, php
sudo apt update
sudo apt upgrade
sudo apt install apache2 php mysql-server
sudo apt install php-mysql php-gd php-mbstring php-xml php-curl
sudo service apache2 restart
1. Karena requirement untuk menginstal calibre-web butuh Python 2.7+, python 3.x+, maka dilakukan instalasi
sudo apt-get install python
Sudo apt-get install python3


Instalasi Calibre-Web
1. Instal dependensi dengan menjalankan pip install --target vendor -r requirements.txt.
2. Jalankan perintah: python cps.py (atau nohup python cps.py - Direkomendasikan jika ingin menutup terminal windows)
3. Arahkan browser ke http://localhost:8083 or http://localhost:8083/opds for the OPDS catalog
4. Atur Location of Calibre database ke folder penempatan Calibre library (metadata.db), tekan tombol “submit”
5. Masuk ke halaman Login
Default admin login:
Username: admin
Password: admin123


Cara Pemakaian
* Tampilan aplikasi web:
  

* Fitur-fitur yang terdapat dalam calibre adalah sebagai berikut:
1. Library Management
Calibre dapat mengurutkan buku berdasarkan: Judul, Penulis, Tanggal dimasukkan, Tanggal diterbitkan, Ukuran, Rating, Seri, dan lain-lain. Serta mendukung metode pencarian: tags, komentar dan advanced search. Selain itu, calibre dapat terhubung ke internet untuk menemukan buku berdasarkan judul, pengarang atau ISBN. Dan dapat mengunduh berbagai jenis metadata dan cover buku secara otomatis.
 2. Mendownload berita dari web dan mengubahnya ke dalam bentuk e-book
Calibre secara otomatis dapat mengambil berita dari website atau RSS feed, mengonversinya menjadi e-book dan mengunggahnya. E-book tersebut merupakan versi lengkap dari artikel, bukan hanya ringkasan.
 3. Konversi e-book
Calibre dapat mengonversi dalam berbagai format. Fitur dalam konversi e-book yaitu dapat mengatur ulang ukuran semua font, memastikan output e-book dapat dibaca, dan dapat mendeteksi atau membuat struktur buku.
Input Format: CBZ, CBR, CBC, CHM, EPUB, FB2, HTML, MENYALA, LRF, MOBI, ODT, PDF, RRC, PDB, PML, RB, RTF, SNB, TCR, TXT
Output Format: EPUB, FB2, OEB, MENYALA, LRF, MOBI, PDB, PML, RB, PDF, SNB, TCR, TXT
 4. Memiliki server untuk mengakses koleksi e-book secara online
Calibre mempunyai web server yang memungkinkan untuk mengakses koleksi e-book secara online. Calibre juga dapat mengirim e-book melalui e-mail dan mengunduh berita secara otomatis. Calibre juga mendukung perangkat mobile.
 5. Sinkronisasi ke perangkat pembaca e-book
Calibre memiliki driver perangkat desain modular yang menambah dukungan untuk perangkat e-reader yang berbeda. Proses sinkronisasinya yaitu calibre dapat memperbarui metadata koleksi berdasarkan tag yang didefinisikan di perpustakaan. Jika sebuah buku memiliki lebih dari satu format yang tersedia, calibre secara otomatis memilih format terbaik ketika mengunggah ke perangkat. Jika tidak ada format yang sesuai, secara otomatis calibre akan mengonversi e-book ke format yang sesuai untuk perangkat sebelum mengirimnya.




* Hasil screenshot website Calibre:
* Tampilan login.
  

* Tampilan utama website.
  







* Tampilan saat memilih buku.
  

* Tampilan saat mengedit informasi terkait buku.
  







* Tampilan advanced search.
  

* Tampilan untuk mengupload.
  

  Pembahasan
   * Kelebihan
      * Lebih praktis dan ringan
      * Dapat disimpan dalam jangka waktu yang lama dengan kemungkinan kerusakan yang minim
      * Distribusinya yang cepat dan mudah karena memanfaatkan jaringan internet
      * Cenderung lebih murah dibanding buku cetak
   * Kekurangan
      * Bergantung dengan sumber daya listrik
      * Perangkat pembaca yang masih mahal
      * Terkait dengan masalah hak cipta
Referensi
https://github.com/auriza
https://github.com/janeczku/calibre-web
https://calibre-ebook.com/
https://syafruldzulfikarfajri.blogspot.com/2014/02/makalah-calibre.html
https://donyprisma.wordpress.com/2012/07/05/calibre-e-book-management/