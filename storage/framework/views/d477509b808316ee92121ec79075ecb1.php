<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form <?php echo e($title); ?> Produk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="<?php echo e(asset('assets/jquery.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body style="width: 95%;">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <h4>Form <?php echo e($title); ?> Produk</h4>
        <form class="border p-3" method="POST" action="/<?php echo e($action); ?>">
          <?php echo csrf_field(); ?>
          <?php if(isset($method) && $method === 'PUT'): ?>
            <?php echo method_field('PUT'); ?>
          <?php endif; ?>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e(isset($data)?$data->name:''); ?>" required>
          </div>
          <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="<?php echo e(isset($data)?$data->price:''); ?>" required>
          </div>
          <div class="text-center">
            <button class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CLO-2_ABP\resources\views/product/form.blade.php ENDPATH**/ ?>