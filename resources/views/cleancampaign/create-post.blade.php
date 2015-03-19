<!DOCTYPE html5>
<html>
<title>Create a Post</title>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>

<!-- Place this in the body of the page content -->
<body>
	{!! Form::open(array('url' => '/posts/create')) !!}
    <input name="title" type="text" placeholder="title" required></input>
    <textarea name="content" height="50%" width="80%" style="margin:auto;"></textarea>
    <button name="submit" class="submit">Submit</button>
    {!! Form::close() !!}
</body>
</html>