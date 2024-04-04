<?php
// Function to generate a unique identifier for each visitor
function getVisitorIdentifier() {
    return md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
}

$visitor_identifier = getVisitorIdentifier();

// Initialize the visitor counter
$counter_file = 'visitor_counter.txt';
$current_count = (file_exists($counter_file)) ? (int)file_get_contents($counter_file) : 0;

// Check if the visitor's identifier exists in a file or database to avoid counting multiple visits from the same user
$visitor_data_file = 'visitor_data.txt';
$visitor_identifiers = file($visitor_data_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (!in_array($visitor_identifier, $visitor_identifiers)) {
    // Add the visitor's identifier to the list
    file_put_contents($visitor_data_file, $visitor_identifier . "\n", FILE_APPEND | LOCK_EX);

    // Increment the visitor counter
    $current_count++;
    file_put_contents($counter_file, $current_count, LOCK_EX);
}

// Display the current visitor count
echo "Total visitors: " . $current_count;
?>
