@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tài khoản <span>/ Sửa tài khoản</span></h3>
                </div>
            </div>

            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-info" href="{{ route('users.index') }}">Quay lại</a>
                </div>
            </div>

        </div>
        <!-- Page Headings End -->


            <!--Alert Start-->
            <div class="col-12 mb-30">
                @if (count($errors) > 0)
                    <div class="alert alert-primary">
                        <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
                        <i class="zmdi zmdi-alert-polygon"></i> Các trường dữ liệu không để trống hoặc chưa hợp lệ<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- Alert End -->

            <div class="col-12 mb-30 add-edit-product-wrap">
                <div class="add-edit-product-form">
                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
                    <h4 class="title">Thông tin tài khoản</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                {!! Form::text('name', null, array('placeholder' => 'Họ & Tên','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                {!! Form::text('email', null, array('placeholder' => 'Địa chỉ Email','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                {!! Form::password('password', array('placeholder' => 'Mật khẩu','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                {!! Form::password('confirm-password', array('placeholder' => 'Xác thực mật khẩu','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20 mt-20">
                            <div class="form-group">
                                <h4 class="title">Nhóm tài khoản</h4>
                                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Cập nhật</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>


    </div>
@endsection