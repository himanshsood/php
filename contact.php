<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php

if($_SERVER ['REQUEST_METHOD']=='POST'){
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate Name
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors['name'] = "Name can only contain letters and spaces.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Validate Message
    if (empty($message)) {
        $errors['message'] = "Message is required.";
    }


    echo '<div class="alert alert-primary" role="alert"> Success! </div>';;
}

?>
<body>
  <div class="container py-5">
    <div class="row g-5">
      <!-- Contact Information -->
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

      <!-- Contact Form -->
      <div class="col-md-6">
        <h2>Send Us a Message</h2>
        <p class="text-muted">* All fields are mandatory</p>
        <form method="post" action="">
          <div class="mb-3">
            <label for="name" class="form-label">Name *</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message *</label>
            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Your message here..." required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
