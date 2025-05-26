<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><?php echo $__env->yieldContent('name'); ?> Starting Bootstrap</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo e(route('mahasiswa')); ?>">Mahasiswa</a></li>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
                <?php else: ?>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\Kuliah\SMT 2\Back-End Programming\LARAVEL\crud\resources\views/layouts/menu.blade.php ENDPATH**/ ?>