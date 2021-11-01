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


</head>
<body>

<div class="container">
  <h2><?php echo e($judul); ?></h2>
  <form action="<?php echo e(url('dosen')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
    </div>
    <div class="form-group">
      <label for="NIM">NIDN:</label>
      <input type="text" class="form-control" id="NIM" placeholder="Enter NIM" name="NIM">
    </div>
    <div class="form-group">
      <label for="kontak">Kontak:</label>
      <input type="text" class="form-control" id="kontak" placeholder="Enter Kontak" name="kontak">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <textarea name = "alamat" class="form-control" rows="4" id="alamat"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\sistemPenjadjwalan\resources\views/dosenCreate.blade.php ENDPATH**/ ?>