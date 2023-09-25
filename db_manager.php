<?php
// db_manager.php

// db_manager.php

class DatabaseManager {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function shortenURL($long_url) {
        $short_identifier = $this->generateShortIdentifier();

        $query = "INSERT INTO url_mappings (short_identifier, long_url) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $short_identifier, $long_url);
        $stmt->execute();
        $stmt->close();

        return $short_identifier;
    }

    // Function to generate a unique short identifier (you can modify this function as per your requirements)
    private function generateShortIdentifier() {
        return substr(md5(uniqid()), 0, 6);
    }

    // ... other database-related functions ...
}

?>
