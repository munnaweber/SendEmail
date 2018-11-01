@extends("layouts.app")

@section("content")

<div class="container send_mail">
		
	<div class="col-md-8 offset-2 align-content-center">
		<div class="card">
			<div class="card-header">Sent Mail</div>
				<div class="card-body">
					@if(Session::has('successmail'))
					<div class="alert alert-success">
						Mail Send Successfull
					</div>
					@endif
					<form action="{{url('es/send/email/user')}}" method="POST"> @csrf
						<label for="">Email *</label>
						<input type="text" class="form-control {{$errors->has("email") ? 'is-invalid' : ''}}" name="email">
						<label for="">Subject *</label>
						<input type="text" class="form-control {{$errors->has("subject") ? 'is-invalid' : ''}}" name="subject">
						<label for="">Message *</label>
						<textarea name="message" rows="5" class="form-control {{$errors->has("message") ? 'is-invalid' : ''}}"></textarea>
						<div class="text-center pt-2">
							<button type="submit" class="btn btn-success">Send Mail</button>
						</div>
					</form>
				</div>
		</div>
	</div>

</div>

@endsection

@section("js")
<script src="{{asset('public')}}/es_script.js"></script>
@endsection

@section("css")
<link rel="stylesheet" href="{{asset('public')}}/es_style.css">
@endsection