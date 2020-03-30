@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tài khoản <span>/ Thông tin tài khoản</span></h3>
                </div>
            </div>
            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-info" href="{{ route('users.edit', $user->id) }}">Sửa</a>
                    <a class="button button-outline button-primary" href="{{ route('users.index') }}">Quay lại</a>
                </div>
            </div>

        </div>
        <!-- Page Headings End -->

        <div class="row mbn-30">

            <div class="col-12 mb-30">
                <h4 class="title mb-20">Thông tin tài khoản - #{{ $user->id }}</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 order-details-customer-info">
                        <ul>
                            <li>
                                <span>Họ & Tên</span>
                                <span>{{ $user->name }}</span>
                            </li>
                            <li>
                                <span>E-mail</span>
                                <span>{{ $user->email }}</span>
                            </li>
                            <li>
                                <span>Nhóm tài khoản</span>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <span class="badge badge-success">{{ $v }}</span>
                                    @endforeach
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection