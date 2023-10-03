## Laravel form assignment

Inilah hasilnya, memang agak gimana, daripada yang biasa, mending ada uniknya
oleh Alfadito Aulia Denova - 5025211157

yang dipake:
    
- view
  >> Form.blade.php
 
  >> success.blade.php

- Controller
  >> FormController.php
- Routes
  >> web.php

  untuk DB, berhasil setelah beberapa kali percobaan.
  ada yang unik, yaitu pada fungsi save(), dia mencari table dengan nama forms, padahal yang dibuat adalah form

  sehingga saya akali dengan menambahkan s pada table nya.

  kemudian, awalnya tidak bisa menyimpan image, setelah di ubah menjadi url bentuk yang disimpan ke db nya, bisa tersimpan.
  
  akan tetapi, ketika di ambil kembali untuk ditampilkan, image tidak tampak. kemungkinan karena url dari imagenya sendiri kurang jelas.
