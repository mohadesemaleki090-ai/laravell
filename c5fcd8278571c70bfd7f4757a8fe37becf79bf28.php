<?php $__env->startSection('styles'); ?>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- SweetAlert2 -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>

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
                title: 'شهر مربوطه با موفقیت افزوده شد'
            })
        </script>
    <?php endif; ?>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();
        });
    </script>
            <?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
            <div class="row">
                <!-- left column -->
                <div class="offset-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary card-form">
                        <div class="card-header">
                            <h3 class="card-title">افزودن شهر جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action=" <?php echo e(route('city.store')); ?> ">
                            <?php echo e(@csrf_field()); ?>

                            <div class="card-body">
                                <div class="form-group">
                                    <label>نام استان</label>
                                    <select name="state_id" class="form-control select2" style="width: 100%;">
                                        <option selected="selected" disabled>انتخاب استان</option>
                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">نام شهر</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="لطفا نام شهر را وارد کنید">
                                    <?php if($errors->has('name')): ?>
                                        <span class="input-error"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ثبت شهر</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faradars\ads\resources\views/admin/city/create.blade.php ENDPATH**/ ?>