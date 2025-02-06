<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email (replace with your actual email)
    mail("wheniaschroll@gmail.com", "New Contact Message", $message, "From: $email");

    echo "Message sent successfully!";
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
