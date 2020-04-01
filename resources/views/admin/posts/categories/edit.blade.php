@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Tin tức <span>/ Sửa danh mục</span></h3>
                </div>
            </div>

            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-info" href="{{ route('category.index') }}">Quay lại</a>
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

        <div class="col-12 mb-30 add-edit-wrap">
            <div class="add-edit-form">

                {!! Form::model($category, ['method' => 'PATCH','route' => ['category.update', $category->id]]) !!}
                <h4 class="title mb-20">Sửa danh mục</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 mb-20">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                                <div class="form-group">
                                    <span>Tên danh mục:</span>
                                    {!! Form::text('category_name', null, array('class' => 'form-control', 'id' => 'names', 'onChange' => 'ChangeToSlug()')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                                <div class="form-group">
                                    <span>Slug:</span>
                                    {!! Form::text('slug', null, array('class' => 'form-control', 'id' => 'slugs')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                                <div class="form-group">
                                    <span>Danh mục cha:</span>
                                    <select name="parent_id" class="form-control">
                                        <option value="0">Trống</option>
                                        @foreach($Categories as $cat)
                                            <option value="{{ $cat->id }}" @if($cat->id == $category->parent_id) selected @endif >{{ $cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                                <span>Hình ảnh:</span>
                                <input class="file-pond" type="file" multiple>
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-8 col-md-8 mb-20">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-20">
                                <div class="form-group">
                                    <span>Mô tả:</span>
                                    {!! Form::textarea('description', null, array('class' => 'form-control summernote')) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    {{--<div class="col-xs-12 col-sm-12 col-md-12 mb-20">--}}
                        {{--<div class="form-group">--}}
                            {{--<strong>Quyền cho phép:</strong>--}}
                            {{--<ul style="list-style: none;">--}}
                                {{--@foreach($permission as $value)--}}
                                    {{--<li style="margin: 12px 0;">--}}
                                            {{--<span>--}}
                                                {{--<label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}--}}
                                                    {{--{{ $value->name }}--}}
                                                {{--</label>--}}
                                            {{--</span>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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

@section('javascript')

    <script src="{{ asset('/js/backend_js/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('/js/backend_js/plugins/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('/js/backend_js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ asset('/js/backend_js/plugins/filepond/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('/js/backend_js/plugins/filepond/filepond.active.js') }}"></script>
    <script>
        (function ($) {
            "use strict";
            /*Summernote*/
            if( $('.summernote').length ) {
                $('.summernote').summernote({
                    height: 350,
                });
            }
        })(jQuery);
    </script>
@endsection