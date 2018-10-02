@extends('Admin.index')
@section('content')
    <div class="span9" id="content">
        <div class="row-fluid mgT12">
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="breadcrumb">
                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <li>
                            <a href="">Danh Sách Loại</a> <span class="divider">/</span>
                        </li>
                        <li class="active">Thêm Loại sản phẩm</li>
                    </ul>
                </div>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Error</h4>
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Thêm Loại Sản Phẩm</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" id="form" action="admin/category/add" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Form Components</legend>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="control-group">
                                    <label class="control-label" for="typeahead">Tên Loại Sản Phẩm <span class="required">*</span> </label>
                                    <div class="controls">
                                        <input type="text" class="span6" value="{{old('title')}}" name="title" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="optionsCheckbox">Hiện thị</label>
                                    <div class="controls">
                                        <label class="uniform">
                                            <div>
                                                <span>
                                                    <input class="uniform_on" name="active" type="checkbox" value="1">
                                                </span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="textarea2">Ghi chủ <span class="required">*</span></label>
                                    <div class="controls">
                                        <textarea class="input-xlarge textarea" name="description" placeholder="Enter text ..." style="width: 750px; height: 200px">{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn"><a href="">Cancel</a></button>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection