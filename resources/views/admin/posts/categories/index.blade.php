@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tin tức <span>/ Danh mục</span></h3>
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

            <div class="col-5 mb-30 add-edit-wrap">
                <div class="add-edit-form">
                    {!! Form::open(array('route' => 'category.store', 'method' => 'POST')) !!}
                    <h4 class="title">Thêm danh mục</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                <span>Tên danh mục</span>
                                {!! Form::text('category_name', null, array('class' => 'form-control', 'id' => 'names', 'onChange' => 'ChangeToSlug()')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                <span>Slug</span>
                                {!! Form::text('slug', null, array('class' => 'form-control', 'id' => 'slugs')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                <span>Danh mục cha</span>
                                <select name="parent_id" class="form-control">
                                    <option value="0">Trống</option>
                                    @foreach($Categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                            <div class="form-group">
                                <span>Mô tả</span>
                                {!! Form::textarea('description', null, array('class' => 'form-control summernote')) !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @can('category-create')
                        <div class="d-flex flex-wrap justify-content-start col mbn-10">
                            <button type="submit" class="button button-outline button-primary mb-10 mr-10 ml-0">Thêm chuyên mục</button>
                        </div>
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="col-7 mb-30">
                <table class="table table-bordered">
                    <tr>
                        <th width="40px">TT</th>
                        <th>Tên danh mục</th>
                        <th>Slug</th>
                        <th width="80px">Action</th>
                    </tr>

                    @foreach ($Categories as $category)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                @can('category-edit')
                                    <a class="btn btn-sm btn-info" href="{{ route('category.edit',$category->id) }}">Sửa</a>
                                @endcan
                                @can('category-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Xóa', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>


            {{--{!! $roles->render() !!}--}}

        </div><!-- Page Headings End -->

    </div>
@endsection

@section('javascript')
    <script src="{{ asset('/js/backend_js/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('/js/backend_js/plugins/summernote/summernote.active.js') }}"></script>
@endsection