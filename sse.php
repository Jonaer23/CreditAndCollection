<?php
header('Content-Type: text/event-stream');
while (ob_get_level() > 0) {
    ob_end_clean();
}
header('Cache-Control: no-cache');

// Send an initial response to establish the SSE connection
echo "data: Connected\n\n";
flush();

// Generate and push updates
while (true) {
    $timestamp = date('r');
    echo "data: {$timestamp}\n\n";
    flush();
    sleep(1); // Wait for 1 second before sending the next update
}
