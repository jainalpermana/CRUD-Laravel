<h1>Create Blog Post</h1>

<form class="" action="/blog" method="post">
	<input type="text" name="title" value="" placeholder="judul"><br>
	{{($errors->has('title')) ? $errors->first('title') : ''}}

	<textarea name="subject" rows="8" cols="40" placeholder="isi..."></textarea>
	{{($errors->has('subject')) ? $errors->first('subject') : ''}}
	<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
	<input type="submit" name="name" value="post"><br>
</form>