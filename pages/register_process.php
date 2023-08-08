<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../includes/db.php';

// Get user input from the login form
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];

// Validate and hash the password if it's set in the form
if (isset($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
} else {
    // Handle the case where the password field is not set
    echo "Error: Password field is missing.";
    exit; // Stop further processing
}

// Prepare and execute the SQL query to insert data into the 'users' table
$query = "INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?)";
$stmt = $connection->prepare($query);
$stmt->bind_param("ssss", $name, $username, $password, $email);

if ($stmt->execute()) {
    // Registration successful
    header("Location: ../pages/registerSuccess.php");
} else {
    // Registration failed
    // header("Location: ../pages/login.php");
    echo "Error: " . $stmt->error; // Display the error message
}

$stmt->close();
$mysqli->close();
