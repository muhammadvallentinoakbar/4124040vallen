<!DOCTYPE html>
<html>
<head>
    <title>Detail Hewan</title>
</head>
<body>

<h1>Detail Hewan</h1>

<p><strong>ID:</strong> {{ $id }}</p>
<p><strong>Nama Hewan:</strong> {{ $data['nama'] }}</p>
<p><strong>Jenis:</strong> {{ $data['jenis'] }}</p>
<p><strong>Deskripsi:</strong> {{ $data['deskripsi'] }}</p>

<a href="/katalog">Kembali ke Katalog</a>

</body>
</html>