<?php $__env->startSection('title', 'مشاهده همه استان ها'); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">نمایش تمامی استان ها</h3>
            <p>برای مشاهده شهرهای هر استان ، ابتدا استان مربوطه را انتخاب کنید</p>
        </div>
        <div class="card-body">

            <div class="margin row">
                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="btn-group col-md-2">
                    <a href="<?php echo e(route('state.show', $state)); ?>" type="button" class="btn btn-warning btn-flat"><?php echo e($state->name); ?></a>
                    <button type="button" class="btn btn-warning btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-sm<?php echo e($state->id); ?>">حذف</a>
                        <a class="dropdown-item" href="<?php echo e(route('state.edit', $state->id)); ?>">ویرایش</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('state.show', $state)); ?>">مشاهده شهرها</a>
                    </div>
                </div>

                    <div class="modal fade" id="modal-sm<?php echo e($state->id); ?>">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">حذف استان</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>آیا از حذف مطمئنی؟</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                                    <form action="<?php echo e(route('state.destroy', $state->id)); ?>" method="post">
                                        <?php echo e(method_field('delete')); ?>

                                        <?php echo e(csrf_field()); ?>

                                        <button type="submit" class="btn btn-danger">بله حذف کن</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        </div>
        <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faradars\ads\resources\views/admin/state/index.blade.php ENDPATH**/ ?>