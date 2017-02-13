<h1>Edit Blog Post</h1>

<form class="" action="/blog/{{$blog->id}}" method="post">
	<input type="text" name="title" value="{{$blog->id}}" placeholder="judul"><br>
	{{($errors->has('title')) ? $errors->first('title') : ''}}

	<textarea name="subject" rows="8" cols="40" placeholder="isi..."> {{$blog->subject}}</textarea>
	{{($errors->has('subject')) ? $errors->first('subject') : ''}}
	<br>

	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="edit">
</form>