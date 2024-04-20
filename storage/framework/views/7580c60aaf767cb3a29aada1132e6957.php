

<?php $__env->startSection('title', 'Daftar Produk'); ?>

<?php $__env->startSection('content'); ?>

<?php if(auth()->guard()->check()): ?>
<div class="row justify-content-end" style="margin-top:2%">
<div class="col-3">
    <?php echo e(Auth::user()->name); ?>

    <a href="/logout" class="btn btn-warning">Logout</a>
</div>
</div>
<?php endif; ?>

        <div class="col-4">
        <span class="float-left"><?php echo e(is_array(session('msg')) ? implode(', ', session('msg')) : session('msg')); ?></span>
            <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Variant</th>
                    <th>Aksi</th>
                </tr>
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->name); ?></td>
                    <td><?php echo e($d->price); ?></td>
                    <td>
                            <ul>
                                <?php $__currentLoopData = $d->variants()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($var->name); ?></li>
                                Desc: <?php echo e($var->description); ?> <br />
                                Proc: <?php echo e($var->processor); ?> <br />
                                RAM: <?php echo e($var->memory); ?> <br />
                                Strg: <?php echo e($var->storage); ?> <br />
                                Product: <?php echo e($var->product->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    <td>
                        <a href="/product/<?php echo e($d->id); ?>/edit" class="btn btn-primary">Edit</a>
                        <form method="post" action="/product/<?php echo e($d->id); ?>" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CLO-2_ABP\resources\views/product/index.blade.php ENDPATH**/ ?>