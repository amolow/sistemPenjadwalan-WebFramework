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
  <h1>Jadwal</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Mahasiswa</th>
        <th>Dosen</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Awal</th>
        <th>Akhir</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($jadwals as $data)
      <tr>  
        <td>{{$data->id}}</td>
        <td>{{$data->mahasiswa->nama}}</td>
        <td>{{$data->dosen->nama}}</td>
        <td>{{$data->judul}}</td>
        <td>{{$data->deskripsi}}</td>
        <td>{{$data->awal}}</td>
        <td>{{$data->akhir}}</td>
        <td>
        	<a href="jadwal/{{$data->id}}"><button type="button" class="btn btn-primary" >Show</button></a>
        	<a href="jadwal/{{$data->id}}/edit"><button type="button" class="btn btn-warning" >Edit</button></a>
          <a href="jadwal/delete/{{$data->id}}">
        	<button type="button" class="btn btn-danger">Delete</button></a>
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
  <a href="jadwal/create">
   <button type="button" class="btn btn-primary">Create</button></a>


</div>

</body>
</html>
