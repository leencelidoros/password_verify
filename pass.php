<?php
// Hardcoded password
$RealPassword = "MySuperSecretPassword";

// Check if a password was provided as viA cmd 
if ($argc < 2) {
    echo "Usage: php pass.php <password>\n";
    exit(1);
}

// Get the password from the CMD argument
$password = $argv[1];

// Hash the real password
$hashedPassword = password_hash($RealPassword, PASSWORD_DEFAULT);

// Display the hashed password
echo "Hashed Password: $hashedPassword\n";

// Verify the entered password against the hashed one
if (password_verify($password, $hashedPassword)) {
    echo "Password is correct!: $RealPassword\n";
} else {
    echo "Password is incorrect.\n";
}

// Verify a wrong password
$wrongPassword = "WrongPassword";
if (password_verify($wrongPassword, $hashedPassword)) {
    echo "Wrong password is correct, which shouldn't happen!\n";
} else {
    echo "Oops !Wrong password is wrong.\n";
}
?>
