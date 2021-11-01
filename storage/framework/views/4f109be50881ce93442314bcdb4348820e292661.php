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



<script>
    // Default date and time picker
    $('#datetimepicker-default').datetimepicker();
</script>





</head>
<body>

<div class="container">
  <h2><?php echo e($judul); ?></h2>
  <form action="<?php echo e(url('jadwal/')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="nama">Mahasiswa:</label>
      <select name="idMahasiswa" required id="idMahasiswa" class = "form-control" >
        <option value="" disabled selected>
          Pilih Mahasiswa
        </option>
        <?php $__currentLoopData = $allMahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($mahasiswa->id); ?>">
          <?php echo e($mahasiswa->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

    <div class="form-group">
      <label for="nama">Dosen:</label>
      <select name="idDosen" required id="idDosen" class = "form-control" >
        <option value="" disabled selected>
          Pilih Dosen
        </option>
        <?php $__currentLoopData = $allDosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($dosen->id); ?>">
          <?php echo e($dosen->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" id="judul" placeholder="Enter Judul" name="judul">
    </div>

    <div class="form-group">
      <label for="alamat">Deskripsi:</label>
      <textarea name = "deskripsi" class="form-control" rows="4" id="deskripsi"></textarea>
    </div>



    <div class="form-group">
      <label for="awal">Awal:</label>
      <input  type="date" class="form-control" id="awal"  name="awal">


    </div>
    <div class="form-group">
      <label for="kontak">Akhir:</label>
      <input type="date" class="form-control" id="akhir" placeholder="Enter Kontak" name="akhir">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\sistemPenjadjwalan\resources\views/jadwalCreate.blade.php ENDPATH**/ ?>