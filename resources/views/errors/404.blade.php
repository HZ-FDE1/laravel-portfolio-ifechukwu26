<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
</head>
<body>
<div>
<h1>404 Page Not Found</h1>
<p>The page you are looking for could not be found.
    <a href="{{ url('/') }}" class="button is primary"> return to homepage</a>
    <form action="{{ url('/search') }}" method="get">
    <input type="text" name="q" placeholder="search...">
    <button type="submit"> search</button>
</form>
</div>
</body>
</html>
