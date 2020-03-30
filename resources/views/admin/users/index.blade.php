@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tài khoản <span>/ Danh sách tài khoản</span></h3>
                </div>
            </div>
            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-primary" href="{{ route('users.create') }}">Thêm mới</a>
                </div>
            </div>

        </div>
        <!-- Page Headings End -->

        <div class="row mbn-30">

            <!--Alert Start-->
            <div class="col-12 mb-30">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary">
                    <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
                    <i class="zmdi zmdi-alert-polygon"></i> {{ $message }}
                </div>
                @endif
            </div>
            <!-- Alert End -->

            <div class="col-12 mb-30">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th>TT</th>
                            <th>Họ & Tên</th>
                            <th>Email</th>
                            <th>Quyền</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="btn btn-sm btn-primary" href="{{ route('users.show',$user->id) }}">Xem</a>
                                        <a class="btn btn-sm btn-info" href="{{ route('users.edit',$user->id) }}">Sửa</a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Xóa', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection