@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tài khoản <span>/ Nóm tài khoản</span></h3>
                </div>
            </div>
            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-primary" href="{{ route('roles.create') }}">Thêm mới</a>
                </div>
            </div>
        </div><!-- Page Heading End -->

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
                <table class="table table-bordered">
                    <tr>
                        <th width="70px">TT</th>
                        <th>Nhóm quyền tài khoản</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="btn btn-sm btn-primary" href="{{ route('roles.show',$role->id) }}" title="Xem">Xem</a>
                                    @can('role-edit')
                                        <a class="btn btn-sm btn-info" href="{{ route('roles.edit',$role->id) }}">Sửa</a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Xóa', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>


            {!! $roles->render() !!}

        </div><!-- Page Headings End -->

    </div>
@endsection