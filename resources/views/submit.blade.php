@extends('layouts.master')
@section('title')
	Contact Us
@endsection
@section('content')
	<form action="#">
		<h2 style="text-align: center;">འབྲེལ་བ་འབད་ས།</h2>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="name"><span style="color: red;">*</span>མཚན:</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="email"><span style="color: red;">*</span>Email Address:</label>
			<input type="email" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="phone_no"><span style="color: red;">*</span>བརྒྱུད་འཕྲིན་ཨང་།:</label>
			<input type="number" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="artist"><span style="color: red;">*</span>ཞབས་ཁྲ་གི་མིང་།:</label>
			<input type="number" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="composer"><span style="color: red;">*</span>རྩོམ་པ་པོ།:</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="name"><span style="color: red;">*</span>གླུ་ཚིག:</label>
			<textarea name="message" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="col-centered col-md-6 col-md-offset-3">
			<input type="submit" name="sumbit" value="གཏང" class="btn btn-success">
			<input type="reset" name="sumbit" value="ཆ་མེད་གཏང" class="btn btn-danger">
		</div>
	</form>
@endsection