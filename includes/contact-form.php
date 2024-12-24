<?php
$name = $email = $message = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name)) {
        $errors[] = 'Name is required';
    }

    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }

    if (empty($message)) {
        $errors[] = 'Message is required';
    }

    if (empty($errors)) {
        // Send email (replace with your preferred method)
        $to = 'oumaimaaitsaid.dev.com';
        $subject = 'New contact form submission';
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = 'Thank you for your message. I\'ll get back to you soon!';
            $name = $email = $message = '';
        } else {
            $errors[] = 'Sorry, there was an error sending your message. Please try again later.';
        }
    }
}
?>

<?php if (!empty($errors)): ?>
    <div class="error-messages">
        <?php foreach ($errors as $error): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (isset($success)): ?>
    <div class="success-message">
        <p><?php echo htmlspecialchars($success); ?></p>
    </div>
<?php endif; ?>

<form action="#contact" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required><?php echo htmlspecialchars($message); ?></textarea>
    </div>
    <button type="submit" class="submit-button">Send Message</button>
</form>