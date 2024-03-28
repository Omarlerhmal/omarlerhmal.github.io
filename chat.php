‌<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
 
// Simulate receiving messages (you would replace this with your actual message handling logic)
while(true) {
    $message = ''; // Implement logic to get new message
    if (!empty($message)) {
        echo "data: $message\n\n";
        flush();
    }
    sleep(1); // Adjust as needed
}
?>