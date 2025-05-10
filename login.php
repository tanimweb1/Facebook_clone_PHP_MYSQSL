<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if user exists in the database
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Success login
    echo "<h1 style='text-align:center;'>🎉 Welcome back, $username!</h1>";
    echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
  } else {
    // Login failed
    echo "<h2 style='text-align:center;color:red;'>Invalid email or password!</h2>";
    echo "<p style='text-align:center;'><a href='index.html'>Try again</a></p>";
  }

  $conn->close();
}
?>
