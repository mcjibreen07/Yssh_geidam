<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveuser.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add User</h4></center>
<hr>
<div id="ac">

<span>Username : </span><input type="text" style="width:265px; height:30px;" name="username" placeholder="username"/><br>
<span>Password : </span><input type="password" style="width:265px; height:30px;" name="password" placeholder="password"/><br>
<span>Rank : </span>
<select name="position" style="width:265px; height:30px; margin-left:-5px;" required>
	<option>Select rank</option>
        <option value="Admin">Admin</option>
        <option value="Staff">Staff</option>
        <option value="Doctor">Doctor</option>
        <option value="Doctor">PMS</option>
</select><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save User</button>
</div>
</div>
</form>