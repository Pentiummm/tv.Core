@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tài khoản <span>/ Thêm mới nhóm tài khoản & phân quyền</span></h3>
                </div>
            </div>

            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-info" href="{{ route('roles.index') }}">Quay lại</a>
                </div>
            </div>

        </div>
        <!-- Page Headings End -->

        <div class="row mbn-30">

            <!--Alert Start-->
            <div class="col-12 mb-30">
                @if (count($errors) > 0)
                    <div class="alert alert-primary">
                        <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
                        <i class="zmdi zmdi-alert-polygon"></i> <strong>Whoops!</strong> There were some problems with your input.<br>
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

                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    <h4 class="title">Thông tin nhóm tài khoản & phân quyền</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                {!! Form::text('name', null, array('placeholder' => 'Tên nhóm tài khoản','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                <strong>Quyền cho phép:</strong>
                                <ul style="list-style: none;">
                                @foreach($permission as $value)
                                    <li style="margin: 12px 0;">
                                        <span><label>
                                            {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}
                                        </label>
                                        </span>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection