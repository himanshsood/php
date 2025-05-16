<?php
// Include Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$submitted = false;
$feedback = '';
$name = '';
$email = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];

    // Basic validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Name can only contain letters and spaces.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        // Save to database
        $stmt = $conn->prepare("INSERT INTO content (name, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $message);
        $stmt->execute();

        // Send email
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'em2.pwh-r1.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'himanshsood@orientaloutsourcing.com';
            $mail->Password = 'Soodhim@311820';
            $mail->SMTPSecure = 'tls'; // 'ssl' is incorrect for port 587
            $mail->Port = 587;

            $mail->setFrom('himanshsood@orientaloutsourcing.com', 'Contact Form');
            $mail->addAddress('himanshsood@orientaloutsourcing.com');

            $mail->isHTML(true);
            $mail->Subject = 'New Form Submission';
            $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong> $message";

            $mail->send();
            $submitted = true;
            $feedback = '<div class="alert alert-success">Message has been sent successfully.</div>';
        } catch (Exception $e) {
            $feedback = '<div class="alert alert-danger">Mailer Error: ' . $mail->ErrorInfo . '</div>';
        }

        $stmt->close();
    } else {
        $feedback = '<div class="alert alert-danger"><ul><li>' . implode('</li><li>', $errors) . '</li></ul></div>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-md-6">
        <h2>Contact</h2>
        <p>Feel free to reach out to us through any of the methods below:</p>
        <ul class="list-unstyled">
          <li><strong>Email:</strong> contact@example.com</li>
          <li><strong>Phone:</strong> +91 12345 67890</li>
          <li><strong>Address:</strong> 123, Business Street, Mumbai, India</li>
        </ul>
        <img src="https://orientaloutsourcing.com/images/contact.png" alt="Contact Us" class="img-fluid mt-3" />
      </div>

      <div class="col-md-6">
        <h2>Send Us a Message</h2>
        <p class="text-muted">* All fields are mandatory</p>

        <?php echo $feedback; ?>

        <form method="post" action="">
          <div class="mb-3">
            <label for="name" class="form-label">Name *</label>
            <input type="text" name="name" class="form-control" id="name" value="<?= htmlspecialchars($name) ?>" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= htmlspecialchars($email) ?>" required>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message *</label>
            <textarea class="form-control" name="message" id="message" rows="4" required><?= htmlspecialchars($message) ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
