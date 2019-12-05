@extends('home.mainLayout')
@section('content')

<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<div class="main_full">
	<div class="container">
		<div class="panel">
			<div class="button_outer">
				<div class="btn_upload">
					<input type="file" id="upload_file" name="">
					Upload Image
				</div>
				<div class="processing_bar"></div>
				<div class="success_box"></div>
			</div>
		</div>
		<div class="error_msg"></div>
		<div class="uploaded_file_view" id="uploaded_view">
			<span class="file_remove">X</span>
			
		</div>
		
	</div>
</div>

@endsection

@section('title')
	Picture Upload
@endsection