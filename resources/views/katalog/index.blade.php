<!DOCTYPE html>
<html>
<head>
    <title>Katalog Hewan</title>
</head>
<body>

<h1>Katalog Hewan</h1>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama Hewan</th>
    <th>Jenis Makanan</th>
</tr>

@foreach($hewan as $item)
<tr>
    <td>{{ $item['id'] }}</td>
    <td>{{ $item['nama'] }}</td>
    <td>{{ $item['jenis'] }}</td>
</tr>
@endforeach

</table>

</body>
</html>