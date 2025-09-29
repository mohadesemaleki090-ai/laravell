<div class="card-header">
    <h3 class="card-title card-title-category">{{ $category->name }}</h3>

    <div class="card-tools">
        <button type="button" class="btn btn-tool"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-tool"><i class="fas fa-trash"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
    </div>
    <!-- /.card-tools -->
</div>
<!-- /.card-header -->

<x-children :categories="$category->children" />
