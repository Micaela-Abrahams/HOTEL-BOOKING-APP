<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Storing our mysqli class parameters in variables
$ServerName = "localhost";
$Username = "root";
$Password = "root";
$DatabaseName = 'hotel_booking_app';
$Port = 8889;

// Using the above variables as parameter values
$connection = new mysqli($ServerName, $Username, $Password, $DatabaseName, $Port); // Create connection

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Database Connected successfully" . '</br>';
