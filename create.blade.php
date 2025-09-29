@extends('layout.base_admin')

@section('styles')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
@endsection

@section('scripts')
    <!-- SweetAlert2 -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>

    @if(session('success'))
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
    @endif
@endsection

@section('main_content')
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
                        <form method="post" action=" {{ route('state.store') }} ">
                            {{ @csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">نام استان</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="لطفا نام استان را وارد کنید">
                                    @if($errors->has('name'))
                                        <span class="input-error">{{ $errors->first('name') }}</span>
                                    @endif
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
@endsection
