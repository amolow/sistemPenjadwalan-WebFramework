<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/js/tempusdominus-bootstrap-4.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/css/tempusdominus-bootstrap-4.min.css" crossorigin="anonymous" />
<script type="text/javascript">
$(document).ready(function(){
            $(function () {
                $('#awal').datetimepicker();
            });
            $(function () {
                $('#akhir').datetimepicker();
            });
});
        </script> 






</head>
<body>

<div class="container">
  <h2>{{$judul}}</h2>
  <form action="{{ url('jadwal/'.$jadwal->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nama">Mahasiswa:</label>
      <select name="idMahasiswa" required id="idMahasiswa" class = "form-control" >
        <option value="mahasiswa->id" disabled selected>
          Pilih Mahasiswa
        </option>
        @foreach($allMahasiswa as $mahasiswa)
        <option value="{{$mahasiswa->id}}" @if($mahasiswa->id==$jadwal->id) selected='selected' @endif>
          {{$mahasiswa->nama}}
        </option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="nama">Dosen:</label>
      <select name="idDosen" required id="idDosen" class = "form-control" >
        <option value="" disabled selected>
          Pilih Dosen
        </option>
        @foreach($allDosen as $dosen)

        <option value="{{$dosen->id}}" @if($dosen->id==$jadwal->id) selected='selected' @endif>

          {{$dosen->nama}}
        </option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="judul">Judul:</label>
      <input value="{{$jadwal->judul}}" type="text" class="form-control" id="judul" placeholder="Enter Judul" name="judul">
    </div>

    <div class="form-group">
      <label for="alamat">Deskripsi:</label>
      <textarea name = "deskripsi" class="form-control" rows="4" id="deskripsi">{{$jadwal->deskripsi}}</textarea>
    </div>


    <div class="form-group">
      <label for="awal">Awal:</label>
      <input value="{{$jadwal->awal}}" type="text" class="form-control" id="awal"  name="awal">
    </div>
    <div class="form-group">
      <label for="kontak">Akhir:</label>
      <input value="{{$jadwal->akhir}}" type="text" class="form-control" id="akhir" placeholder="Enter Kontak" name="akhir">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



</body>
</html>
