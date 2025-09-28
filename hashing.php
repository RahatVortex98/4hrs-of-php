<!-- 
hashing = transforming sensitive data (like passwords)
          into a string of letters, numbers, and symbols 
          via a mathematical process.

⚡ Difference from encryption:
   - Encryption can be reversed (decrypt).
   - Hashing is one-way only → cannot get back the original password.

✅ PHP provides built-in hashing functions for security.
-->

<?php
// Original password (plaintext → should never be stored directly in DB)
$password = "pizza123";

// Hash the password using PHP's default algorithm (currently BCRYPT)
// PASSWORD_DEFAULT → chooses the strongest available algorithm
$hash = password_hash($password, PASSWORD_DEFAULT);

// Show the hashed password (will look like random letters & numbers)
// echo $hash;

// Verify user input against the stored hash
if (password_verify("pizza123", $hash)) {
    // If input matches → success
    echo "U are logged in <br>";
} else {
    // If input doesn't match → failure
    echo "Incorrect Password";
}
?>
