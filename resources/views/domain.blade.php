<!DOCTYPE html>
<html>
<body>
<h2>Domain Forms</h2>
<form method="POST">
    {{ csrf_field() }}
    Enter Domain:<br>
    <input type="text" name="domain" placeholder="http://google.com/">
    <input type="submit" value="Submit">
</form>
</body>
</html>
