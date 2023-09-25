<?php
// Database configuration
$host = "localhost";
$username = "centenn1_sedge";
$password = "@Hanabi16";
$database = "centenn1_sedge_accountingsoftware";

// Create database connection
$connection = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($connection->connect_errno) {
    die("Database connection error: " . $connection->connect_error);
}

// Function to get existing appointments for a specific date
function getExistingAppointments($connection, $date) {
    $query = "SELECT AppointmenTime FROM tbl_salesappointment WHERE AppointmentDate = ?"; 
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $date);
    $stmt->execute();
    $result = $stmt->get_result();
    $appointments = array();
    while ($row = $result->fetch_assoc()) {
        $appointments[] = $row['AppointmenTime'];
    }
    $stmt->close();
    return $appointments;
}

$availableDates = array();

// Get the current date and time
$currentDate = date('Y-m-d');
$currentHour = date('H');

// Define work hours
$workStartTime = 8; // 8 AM
$workEndTime = 18; // 6 PM

// Define available time slots per hour
$availableSlotsPerHour = 2;

// Calculate available time slots for the current day
if ($currentHour < $workStartTime) {
    $startHour = $workStartTime;
} elseif ($currentHour >= $workEndTime) {
    $startHour = $workStartTime + 24; // Next day's start time
} else {
    $startHour = $currentHour + 1; // Next available hour
}

for ($hour = $startHour; $hour <= $workEndTime; $hour++) {
     if ($hour === 12) {
        continue;
    }
    $timeSlots = array();
    $existingAppointments = getExistingAppointments($connection, $currentDate);

    for ($slot = 0; $slot < $availableSlotsPerHour; $slot++) {
        $time = sprintf('%02d:00', $hour);
        
        // Exclude the break time
        if ($hour !== 12 || $slot !== 0) {
            $isAvailable = true;
            foreach ($existingAppointments as $appointmentTime) {
                // Check if the time slot is already booked
                if ($appointmentTime === $time) {
                    $isAvailable = false;
                    break;
                }
            }

            if ($isAvailable) {
                $timeSlots[] = $time;
            }
        }
        
        $hour++;
    }

    if (!empty($timeSlots)) {
        $availableDates[] = array(
            'date' => $currentDate,
            'timeSlots' => $timeSlots
        );
    }
}

// Display available dates and time slots
$availableData = array();
foreach ($availableDates as $availableDate) {
    $availableData[] = array(
        'date' => $availableDate['date'],
        'timeSlots' => $availableDate['timeSlots']
    );
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($availableData);
?>
