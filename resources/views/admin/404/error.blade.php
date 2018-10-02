@extends('admin.index')
@section('content')
<div class="span9" id="content">
    <div class="row-fluid mgT12">
    	<div class="navbar">
            <div class="navbar-inner">
                <ul class="breadcrumb">
                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                    <li>
                        <a href="#">Dashboard</a> <span class="divider">/</span>    
                    </li>
                    <li>
                        <a href="#">Settings</a> <span class="divider">/</span> 
                    </li>
                    <li class="active">Tools</li>
                </ul>
            </div>
        </div>
	</div>
	<div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
            </div>
            <div class="block-content collapse in">
                <div class="span12">
					<div class="error-template">
		                <h1>
		                    Oops!</h1>
		                <h2>
		                    404 Not Found</h2>
		                <div class="error-details">
		                    Sorry, an error has occured, Requested page not found!
		                </div>
		                <div class="error-actions">
		                    <a href="{{route('dsdonhang')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
		                        Danh sách đơn hàng </a>
		                </div>
		            </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection