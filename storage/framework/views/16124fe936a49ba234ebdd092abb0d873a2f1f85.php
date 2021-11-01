
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
</head>
<body>

<div class="container">
	<h1>Show Jadwal</h1>
	<br>
	<br>
	<br>
	<h3>Dosen: <?php echo e($jadwal->dosen_id); ?></h3>
	<h3>Mahasiswa: <?php echo e($jadwal->mahasiswa_id); ?></h3>
	<h3>Deskripsi: <?php echo e($jadwal->deskripsi); ?></h3>
	<h3>judul: <?php echo e($jadwal->judul); ?></h3>
	<h3>Tanggal Lahir: <?php echo e($jadwal->awal); ?></h3>
	<h3>Tahun Masuk: <?php echo e($jadwal->akhir); ?></h3>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\sistemPenjadjwalan\resources\views/jadwalShow.blade.php ENDPATH**/ ?>