<?php
// create password
$password = "NotPAsswordSecret";
//hashed password 
$hash = password_hash($password, PASSWORD_DEFAULT); 
// password Verification
echo "Password: $password\n";
echo "hashedPAssword:$hash\n";

if (password_verify($password, $hash)) { 
	echo 'Password is valid!'; } 
else { 
	echo 'Invalid password.'; }
 
?>
