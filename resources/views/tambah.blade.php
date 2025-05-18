<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial Membuat CRUD pada Laravel -www.usm.ac.id</title>
</head>
<body>
  <h2><a href="https:www.usm.ac.id">www.usm.ac.id</a></h2>
  <h3>Data Pegawai</h3>

  <a href="/pegawai">Kembali</a>
  <br>
  <br>

  <form action="/pegawai/store" method="POST">
    {{ csrf_field() }}
    Nama <input type="text" name="nama" required> <br>
    Jabatan <input type="text" name="jabatan" required> <br>
    Umur <input type="number" name="umur" required> <br>
    Alamat <textarea name="alamat" required></textarea> <br>
    <input type="submit" value="Simpan Data">
  </form>
</body>
</html>