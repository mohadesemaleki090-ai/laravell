<div class="card-header">
    <h3 class="card-title card-title-category"><?php echo e($category->name); ?></h3>

    <div class="card-tools">
        <button type="button" class="btn btn-tool"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-tool"><i class="fas fa-trash"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
    </div>
    <!-- /.card-tools -->
</div>
<!-- /.card-header -->

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.children','data' => ['categories' => $category->children]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('children'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($category->children)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Faradars\ads\resources\views/components/category.blade.php ENDPATH**/ ?>