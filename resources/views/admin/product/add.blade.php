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
                            <a href="">Sản Phẩm</a> <span class="divider">/</span>
                        </li>
                        <li class="active">Thêm sản phẩm</li>
                    </ul>
                </div>
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
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Thêm Sản Phẩm</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" id="form" action="admin/product/add" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Form Components</legend>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="control-label" for="typeahead"><span class="required">(*)</span> Trường bắt buộc</label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="typeahead">Tên Sản Phẩm <span class="required">*</span> </label>
                                    <div class="controls">
                                        <input type="text" class="span6" value="{{old('title')}}" name="title" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="select01">Loại Sản Phẩm <span class="required">*</span></label>
                                    <div class="controls">
                                        <select id="select01" class="chzn-select" name="category">
                                            @if($category)
                                                @foreach($category as $item)
                                                    <option value="{{ $item->category_id }}">{{ $item->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="optionsCheckbox">Dành Cho</label>
                                    <div class="controls">
                                        <label class="radio-inline">
                                              <input class="uniform_on" type="radio" name="sex" value="2" checked  type="checkbox">
                                              Nam
                                          </label>
                                          <label class="radio-inline">
                                            <input class="uniform_on" type="radio" name="sex" value="1" type="checkbox">
                                              Nữ
                                          </label>
                                          <label class="radio-inline">
                                            <input class="uniform_on" type="radio" name="sex" value="3" type="checkbox">
                                              Cả nam - nữ
                                          </label>
                                          <label class="radio-inline">
                                            <input class="uniform_on" type="radio" name="sex" value="0" type="checkbox">
                                              Trẻ em
                                          </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="typeahead">Giá Bán <span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="span6" id="giaban" name="unit_price" value="{{old('unit_price')}}" placeholder="200,000"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="typeahead">Giá Khuyến Mãi <span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="span6" id="giakhuyenmai" name="promotion_price" value="{{old('promotion_price')}}" placeholder="150,000"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="typeahead">Sổ lượng <span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="unit" value="{{old('unit')}}" placeholder="Sổ lượng" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="row">
                                            <div id="image_product"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="fileInput">Hình SP <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-file uniform_on form-control" type="file" name="imgproduct" onchange="image_product();"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="row">
                                            <div id="image_preview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="fileInput">Hình chi tiết <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-file uniform_on form-control" type="file" id="upload_file" name="image[]" onchange="preview_image();" multiple/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="date01">Thời gian mở bán</label>
                                    <div class="controls">
                                        <input type="text" autocomplete="off" name="timeopen" class="input-xlarge datepicker" value=""/>
                                        <p class="help-block">In addition to freeform text</p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="optionsCheckbox">Sản Phấm Mới</label>
                                    <div class="controls">
                                        <label class="radio-inline">
                                            <input class="uniform_on" type="radio" name="moi" value="1" checked>
                                            Mới
                                            <input class="uniform_on" type="radio" name="moi" value="0">
                                            Cũ
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="textarea2">Ghi chủ <span class="required">*</span></label>
                                    <div class="controls">
                                        <textarea class="input-xlarge textarea" name="note" placeholder="Enter text ..." style="width: 750px; height: 200px">{{old('note')}}</textarea>
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

@section('script')
    <script>
        function preview_image()
        {
            var total_file=document.getElementById("upload_file").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='100' height='100'>");
            }
        }

        function image_product() {
            $('#image_product').append("<img src='"+URL.createObjectURL(event.target.files[0])+"' width='100' height='100'>");
        }
        (function($, undefined) {

            "use strict";

            // When ready.
            $(function() {
                $(".datepicker").datepicker({
                    format: 'dd-mm-yyyy'
                });
                var $form = $( "#form" );
                var $giaban = $form.find( "#giaban" );
                var $giakhuyenmai = $form.find( "#giakhuyenmai" );
                $giaban.on( "keyup", function( event ) {
                    // When user select text in the document, also abort.
                    var selection = window.getSelection().toString();
                    if ( selection !== '' ) {
                        return;
                    }
                    // When the arrow keys are pressed, abort.
                    if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                        return;
                    }
                    var $this = $( this );
                    // Get the value.
                    var input = $this.val();
                    var input = input.replace(/[\D\s\._\-]+/g, "");
                    input = input ? parseInt( input, 10 ) : 0;

                    $this.val( function() {
                        return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
                    } );
                } );
                $giakhuyenmai.on( "keyup", function( event ) {
                    // When user select text in the document, also abort.
                    var selection = window.getSelection().toString();
                    if ( selection !== '' ) {
                        return;
                    }
                    // When the arrow keys are pressed, abort.
                    if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                        return;
                    }
                    var $this = $( this );
                    // Get the value.
                    var input = $this.val();
                    var input = input.replace(/[\D\s\._\-]+/g, "");
                    input = input ? parseInt( input, 10 ) : 0;

                    $this.val( function() {
                        return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
                    } );
                } );
            });
        })(jQuery);
    </script>
@endsection