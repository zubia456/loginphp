<title> Register</title>


<form method="post" action="insert">
    {{ csrf_field() }}
Name<br>
<input type="text" name="name"><br>
Email<br>
<input type="text" name="email"><br>
Age<br>
<input type="text" name="age"><br>
City<br>
<input type="text" name="city"><br>
Phone<br>
<input type="text" name="phone"><br>
Password<br>
<input type="text" name="password"><br>
<input type="submit" name="Register" value="Register">    
</form>