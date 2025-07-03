<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $slot = $_POST['slot'];
    $guest = $_POST['guest'];

    // Here you would typically insert this data into a database
    // For now, we'll just display the confirmation page

    echo "<h1>Booking Confirmation</h1>";
    echo "<p>Thank you, $name! Your table has been booked.</p>";
    echo "<p>Slot: $slot</p>";
    echo "<p>Number of guests: $guest</p>";
    echo "<p><a href='index.html'>Back to Home</a></p>";
}
?>
