<?php session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<center>
<form action="proses.php" method="post">
<h1>Login</h1>
<table>
<tbody>
<tr>
<td>Username</td>
<td>: <input name="username" type="text" /></td>
</tr>
<tr>
<td>Password</td>
<td>: <input name="password" type="password" /></td>
</tr>
<tr>
<td>Nim</td>
<td>: <input type="text" name="Nim">
<tr>
<td colspan="2" align="right"><input type="submit" value="Login" /> <input type="reset" value="Batal" /></td>

</tbody>
</table>
</form>
</center>


?>
