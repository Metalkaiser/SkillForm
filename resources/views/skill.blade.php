<!DOCTYPE html>
<html>
<head>
	<title>Skill form</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<form enctype="multipart/form-data" method="post" action="/Form">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div>
			<label>Name: </label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email: </label>
			<input type="text" name="email">
		</div>
		<div>
			<label>Skill description: </label>
			<br>
			<textarea name="comment" rows="5" cols="40"></textarea>
		</div>
		<div>
			<input type="file" name="photo" id="photo">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
	@if (\Session::has('message'))
    <div>
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
	@endif
</body>
</html>