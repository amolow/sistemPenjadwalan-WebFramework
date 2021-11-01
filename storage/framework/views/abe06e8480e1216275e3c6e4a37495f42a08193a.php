
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
	<h1>Show Mahasiswa</h1>
	<br>
	<br>
	<br>
	<h3>Nama: <?php echo e($mahasiswa->nama); ?></h3>
	<h3>NIM: <?php echo e($mahasiswa->nim); ?></h3>
	<h3>Alamat: <?php echo e($mahasiswa->alamat); ?></h3>
	<h3>Tanggal Lahir: <?php echo e($mahasiswa->tanggal_lahir); ?></h3>
	<h3>Tahun Masuk: <?php echo e($mahasiswa->tahun_masuk); ?></h3>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\sistemPenjadjwalan\resources\views/mahasiswaShow.blade.php ENDPATH**/ ?>