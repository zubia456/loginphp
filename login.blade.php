<title> login</title>


<form method="post" action="check">
    {{ csrf_field() }}

Email<br>
<input type="text" name="email"><br>
Password<br>
<input type="password" name="password"><br>
<input type="submit" name="Login" value="Login">    
</form>