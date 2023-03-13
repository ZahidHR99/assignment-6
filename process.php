<?php
// Validate form inputs
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
  }

  // Save profile picture to server
  $uploads_dir = 'uploads/';
  $tmp_name = $_FILES['profile_pic']['tmp_name'];
  $ext = pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
  $filename = uniqid() . '_' . date('YmdHis') . '.' . $ext;
  move_uploaded_file($tmp_name, $uploads_dir . $filename);

  // Save user's name, email, and profile picture filename to CSV file
  $data = [$name, $email, $filename];
  $fp = fopen('users.csv', 'a');
  fputcsv($fp, $data);
  fclose($fp);

  // Start session and set cookie with user's name
  session_start();
  $_SESSION['name'] = $name;
  setcookie('name', $name, time() + 3600); // cookie lasts for 1 hour

  // Redirect to success page
  header('Location: success.php');
  exit;
} else {
  echo "All fields are required";
  exit;
}
