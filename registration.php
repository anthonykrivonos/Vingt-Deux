<!DOCTYPE HTML>
<html>
	<head>
		<style>
			body
			{
				font-size:24pt;
			}
			
			table
			{
				border:thick solid black;
			}
			
			td
			{
				border:thin solid darkgrey;
			}
		</style>
		<?php
			$uname = $_POST['uname'];
			$pword = $_POST['pword'];
		?>
		<title>Registration of <?php echo "$fname $lname"; ?></title>
	</head>
	<body>
		<table>
			<tr>
				<td>Username</td>
				<td><?php echo $uname; ?></td>
			<tr>
			<tr>
				<td>Password</td>
				<td>You didn't think we'd show your password, did you?</td>
			<tr>
		</table>
		<button>Confirm</button>
	</body>
</html>