<html>
<body>

<form method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Domains:
    <br />
    <input type="file" name="domains" />
    <br /><br />
    <input type="submit" value=" Save " />
</form>

</body>
</html>