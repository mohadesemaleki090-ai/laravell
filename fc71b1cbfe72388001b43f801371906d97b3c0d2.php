<?php $__env->startSection('styles'); ?>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- SweetAlert2 -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>

    <?php if(session('success')): ?>
        <script>
            var Toast = Swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: false,
                showCloseButton:true,
                timerProgressBar:true,
                timer: 6000
            });
            Toast.fire({
                icon: 'success',
                title: 'استان مربوطه با موفقیت افزوده شد'
            })
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
            <div class="row">
                <!-- left column -->
                <div class="offset-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary card-form">
                        <div class="card-header">
                            <h3 class="card-title">افزودن استان جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action=" <?php echo e(route('state.store')); ?> ">
                            <?php echo e(@csrf_field()); ?>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">نام استان</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="لطفا نام استان را وارد کنید">
                                    <?php if($errors->has('name')): ?>
                                        <span class="input-error"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ثبت استان</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faradars\ads\resources\views/admin/state/create.blade.php ENDPATH**/ ?>