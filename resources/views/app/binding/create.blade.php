@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">        
        @include('sidemenu')
        <div class="col-md-10 col-xs-10 col-sm-10">
        @include('flash')
        <form method="post">
        	<input type="hidden" name="_token" value="{!! csrf_token() !!}">        
            <div class="panel panel-default">
                <div class="panel-heading">Binding / Create</div>
                <div class="panel-body">
	                <div class="row">
	                	<div class="col-md-10">
	                		<div class="form-group">
	                			<label for="mac-address">mac-address</label>
	                			<input name="mac-address" type="text" class="form-control" id="mac-address" value="{{old('mac-address')}}">
	                		</div>
	                		<div class="form-group">
	                			<label for="address">address</label>
	                			<input name="address" type="text" class="form-control" id="address" value="{{old('address')}}">
	                		</div>
	                		<div class="form-group">
	                			<label for="to-address">to-address</label>
	                			<input name="to-address" type="text" class="form-control" id="to-address" value="{{old('to-address')}}">
	                		</div>
	                		<div class="form-group">
	                			<label for="server">server</label>
	                			<input name="server" type="text" class="form-control" id="server" value="{{old('server')}}">
	                		</div>
	                		<div class="form-group">
	                			<label for="type">type</label>
	                			<input name="type" type="text" class="form-control" id="type" value="{{old('type')}}">
	                		</div>

	                		<div class="form-group">
	                			<label for="comment">Comment</label>
	                			<input name="comment" type="text" class="form-control" id="comment" value="{{old('comment')}}">
	                		</div>
	                	</div>
	                </div>
                </div>
                <div class="panel-footer">                	
	                <button type="submit" class="btn btn-default">Save</button>	                
                </div>
            </div>
    	</form>	
        </div>
    </div>
</div>
@endsection
