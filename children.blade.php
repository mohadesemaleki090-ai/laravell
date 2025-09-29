<div class="card-body">
    @foreach($categories as $category)
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <x-category :category="$category" />
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    @endforeach
</div>
<!-- /.card-body -->
