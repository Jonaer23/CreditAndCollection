<?php
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

// Require the Ratchet autoloader
require __DIR__ . '/vendor/autoload.php';

// Define your WebSocket server class
class AppointmentWebSocketServer implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage();
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new client connection
        $this->clients->attach($conn);
        echo "New client connected: {$conn->resourceId}\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "Received message from client {$from->resourceId}: {$msg}\n";
        // Process the received message as needed

        // Send a response back to the client if desired
        // $from->send("Message received: {$msg}");
    }

    public function onClose(ConnectionInterface $conn) {
        // Remove the client connection
        $this->clients->detach($conn);
        echo "Client disconnected: {$conn->resourceId}\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        // Handle any errors
        echo "An error occurred: {$e->getMessage()}\n";
        $conn->close();
    }

    public function sendNotification($data) {
        $message = json_encode($data);
        foreach ($this->clients as $client) {
            $client->send($message);
        }
    }
}

// Create and run the WebSocket server
$server = new \Ratchet\App('192.168.100.103', 8080, '0.0.0.0');
$server->route('/websocket', new AppointmentWebSocketServer(), ['*']);
$server->run();
