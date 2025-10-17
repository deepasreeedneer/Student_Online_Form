<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
    $message = htmlspecialchars($_POST['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submission Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Submitted Details</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Message:</strong> <?= nl2br($message) ?></p>

    <a href="index.html"><button>Go Back</button></a>
  </div>
</body>
</html>
