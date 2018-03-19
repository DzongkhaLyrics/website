@extends('layouts.master')
@section('title')
	འབྲེལ་བ་འབད་ས།
@endsection
@section('content')
	<form action="#">
		<h2 style="text-align: center;" class="general_header">འབྲེལ་བ་འབད་ས།</h2>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="name" class="input_label_padding"><span style="color: red;">*</span>མཚན།</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="email" class="input_label_padding"><span style="color: red;">*</span>གློག་འཕྲིན་ཁ་བྱང་།</label>
			<input type="email" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="phone_no" class="input_label_padding"><span style="color: red;">*</span>བརྒྱུད་འཕྲིན་ཨང་།</label>
			<input type="number" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="subject" class="input_label_padding"><span style="color: red;">*</span>གནད་དོན།</label>
			<input type="text" class="form-control" required>
		</div>
		
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="message" class="input_label_padding"><span style="color: red;">*</span>ནང་དོན།</label>
			<textarea name="message" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="col-centered col-md-6 col-md-offset-3" align="right">
			<input type="submit" name="sumbit" value="གཏང" class="btn btn-success" style="font-size: 40px; margin-bottom: 15px; width: 90px;">
			<input type="reset" name="sumbit" value="ཆ་མེད་གཏང" class="btn btn-danger" style="font-size: 40px; margin-bottom: 15px; width: 90px;">
		</div>
	</form>
@endsection