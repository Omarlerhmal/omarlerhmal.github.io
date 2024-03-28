 <?php
// Simulate handling the sent message (you would replace this with your actual message handling logic)
$message = json_decode(file_get_contents('php://input'), true)['message'];
// Implement logic to handle the message (store in database, send to another user, etc.)
// For demonstration purposes, simply log the message to the console
error_log('Received message: ' . $message);
?> 
