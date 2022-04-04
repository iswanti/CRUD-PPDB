<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru | SMK Semangat 45</title>
</head>
<body>

<style>
h1{
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Siswa Baru</h1>

<table id="customers">
    <tr>
        <th>No Daftar</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Lengkap</th>
        <th>Agama</th>
        <th>Asal SMP</th>
        <th>Jurusan</th>
    </tr>
    
    @foreach ( $data as $datas)
    <tr>
        <td>{{ $datas->no }}</td>
        <td>{{ $datas->nama }}</td>
        <td>{{ $datas->jenis_kelamin }}</td>
        <td>{{ $datas->alamat}}</td>
        <td>{{ $datas->agama}}</td>
        <td>{{ $datas->asal_smp}}</td>
        <td>{{ $datas->jurusan}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>


