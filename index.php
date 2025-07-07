<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['names'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Connect to database
    $conn = new mysqli("localhost", "root", "", "forms");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (names, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $names, $email, $subject, $message);
        $stmt->execute();
        echo "<p style='color: green; font-weight: bold;'>Registration successful!</p>";
        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form-container">
    <form action="index.php" method="post">
        <div class="two-column-group">
            <div class="form-group">
                <label for="names">Your names</label>
                <input type="text" id="names" placeholder="Type your full names" name="names" required />
            </div>
            <div class="form-group">
                <label for="email">Your email</label>
                <input type="email" id="email" placeholder="Type your email" name="email" required />
            </div>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" placeholder="Type subject" name="subject" required />
        </div>

        <div class="form-group">
            <label for="message">Your message</label>
            <textarea id="your-message" placeholder="Write your message" name="message" required></textarea>
        </div>

        <button type="submit" class="send-button">Send message</button>
    </form>
</div>
</body>
</html>
