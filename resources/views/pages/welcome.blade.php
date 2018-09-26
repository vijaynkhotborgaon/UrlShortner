@extends('main')

@section('content')

<div class="row" style="background-color:#080808;color:white;">
	<div class="col-md-12">
		<h1 class="text-center header-spacing">URL SHORTNER</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-4" style="background-color:#C7C8C8;padding-top:70px;">
		<!-- display errors -->
		@if ($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			{{ $error }}
			@endforeach
		</div>
		@endif
		
		<!-- display successful insertion message -->
		@if (Session::has('success'))
		<div class="alert alert-success">
			<p>{!!session::get('success')!!}</p>
		</div>
		@endif
		
		<!-- form to insert long url's -->
		<form action="store" method="post">
			<div class="form-group">
				<label>Enter URL:</label>
				<input type="text" name="url" class="form-control" id="url">
			</div>
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
				
	</div>
			
	<div class="col-md-8" style="background-color:#BDBAF9;padding-top:30px;padding-bottom:20px;">
		
		<!-- table for short and long url's -->
		<div class="table-responsive">
		<table class="table" id="mytable">
			<thead>
			<tr>
				<th>#</th>
				<th>Actual URL</th>
				<th>Short URL</th>
			</tr>
			</thead>
			<tbody>
				  
				@php
					$count=0
				@endphp
					
				@foreach ($shortners as $shortner)
				@php
					$count++
				@endphp
					
				<tr>
					<th>{{$count}}</th>
					<td>{{$shortner->short_url}}</td>
					<td><a target='_blank' href="{{route('generator',$shortner->unique_code)}}">{{route('generator',$shortner->unique_code)}}</td>
				</tr>
				
				@endforeach
		
			</tbody>
		</table>
		</div>
	</div>
</div>
		
@endsection
		