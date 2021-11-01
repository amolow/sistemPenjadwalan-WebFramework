<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h1>Mahasiswa</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Tahun Masuk</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($mahasiswa as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->nim}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->tanggal_lahir}}</td>
        <td>{{$data->tahun_masuk}}</td>
        <td>
        	<a href="mahasiswa/{{$data->id}}"><button type="button" class="btn btn-primary" >Show</button></a>
        	<a href="mahasiswa/{{$data->id}}/edit"><button type="button" class="btn btn-warning" >Edit</button></a>
        	<a href="mahasiswa/delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href = "mahasiswa"><button type="button" class="btn btn-warning">Mahasiswa</button></a>
   <a href = "dosen"><button type="button" class="btn btn-warning">Dosen</button></a>
   <a href = "jadwal"><button type="button" class="btn btn-warning">Jadwal</button></a>
</div>
  <a href = "mahasiswa/create"> <button type="button" class="btn btn-primary">Create</button></a>

</div>

</body>
</html>
