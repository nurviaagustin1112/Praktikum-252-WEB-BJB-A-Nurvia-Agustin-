<!-- https://www.youtube.com/watch?v=CMwzLURK-rQ -->
<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('template.components.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php echo $__env->make('template.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php echo $__env->make('template.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container-fluid px-4">
                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <?php echo $__env->make('template.components.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\bangsukri\resources\views/template/default.blade.php ENDPATH**/ ?>