<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action={{ route('fileupload') }} method="post" enctype = "multipart/form-data">
	<label>Title</label>
	<input type="text" name="title">
	<input type="file" name="file">
	<input type="submit" name="submit">
	<input name="_token" type="hidden" value="{{ Session::token() }}">
</form>

<div>
	@foreach($files as $file)
	<div>
		{{ $file->file }}
	</div>
	@endforeach
</div>

</body>
</html>