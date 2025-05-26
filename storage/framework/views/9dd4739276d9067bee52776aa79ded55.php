
<?php $__env->startSection('title'); ?>
    Daftar Mahasiswa
<?php $__env->stopSection(); ?>
<?php $__env->startSection('name'); ?>
    Happy Calista (535240127)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="page-section portifilio" id="portofolio">
    <div class="container">
        <br>
        <h1>Daftar Mahasiswa</h1>
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary mb-3">Tambah Data</a>
        
        <?php if(session('success')): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo e(session('success')); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mhs->id); ?></td>
                    <td><?php echo e($mhs->nim); ?></td>
                    <td><?php echo e($mhs->nama); ?></td>
                    <td><?php echo e($mhs->email); ?></td>
                    <td><?php echo e($mhs->jurusan); ?></td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" method="POST" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</section>
<?php $__env->stopSection(); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<?php echo $__env->make('layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Kuliah\SMT 2\Back-End Programming\LARAVEL\crud\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>