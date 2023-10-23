<?php
// Hardcoded password
$RealPassword = "MySuperSecretPassword";

// Check if a password was provided as a command-line argument
if ($argc < 2) {
    echo "Usage: php pass.php <password>\n";
    exit(1);
}

// Get the password from the command-line argument
$password = $argv[1];

// Hash the hardcoded password
$hashedPassword = password_hash($RealPassword, PASSWORD_DEFAULT);

// Display the hashed password
echo "Hashed Password: $hashedPassword\n";

// Verify the provided password against the hashed version
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
    echo "Wrong password is indeed incorrect.\n";
}
?>
