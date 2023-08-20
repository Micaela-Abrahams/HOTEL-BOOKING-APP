<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require __DIR__ . "/../includes/db.php";

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    // Fetch user's name and surname from the database
    $query = "SELECT firstName, surname FROM registration_table WHERE id = $userId";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Retrieve the name and surname
        $name = $row['firstName'];
        $surname = $row['surname'];
    } else {
        // Error handling if the query fails
        $name = "Unknown";
        $surname = "Unknown";
    }
}
?>



<!------------------------- Confirmation -------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/landingPage.css">
    <link rel="stylesheet" href="../css/confirmation.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Include Bootstrap CSS (place this in the <head> section) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap Icons CSS (place this in the <head> section) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <header class="bg-white shadow-sm ">
        <h1 class="userWelcome">Traveltopia</h1>

        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="../pages/gallery.php">Gallery</a>
            <a href="../landingPage.php#contact">Contact</a>
            <a href="../pages/dashboard.php">View Hotels</a>
            <a href="../pages/view-bookings.php">Bookings</a>
            <a href="../pages/logout.php"><button class="btnLogout-popup">Logout</button></a>
        </nav>
    </header>

    <div class="confirmation-text">
        <h3>Booking Confirmed</h3>
        <p> <?php echo $name . ' ' . $surname; ?>, your destination awaits!</p>

        <h4 class="wanderlust-text">Take a moment to feast your eyes on these breathtaking hotels before embarking on your journey.</h4>

        <!-- Radiant Oasis Retreat Hotel -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" class="card-img-top">

                        <div class="card-body">
                            <h4> Radiant Oasis Retreat</h4>
                            <h6 class="mb-4">From ZAR 1,500 per night </h6>

                            <div class="rating mb-4">
                                <h5 class="mb-1"> Rating: </h5>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <a href="../hotels/hotel-1.php"> <button class="go-to-hotel-btn">Book</button></a>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="card-img-top">

                        <div class="card-body">
                            <h4> Aurora Plaza Hotel</h4>
                            <h6 class="mb-4"> From ZAR 2,324 per night </h6>
                            <div class="rating mb-4">
                                <h5 class="mb-1"> Rating: </h5>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <a href="../hotels/hotel-2.php"> <button class="go-to-hotel-btn">Book</button></a>
                        </div>
                        </form>
                    </div>
                </div>

                <!-- Crystal Bay Residency Hotel -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top">

                        <div class="card-body">
                            <h4> Crystal Bay Residency </h4>
                            <h6 class="mb-4"> ZAR 1,522 per night </h6>
                            <div class="rating mb-4">
                                <h5 class="mb-1"> Rating: </h5>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <a href="../hotels/hotel-6.php"> <button class="go-to-hotel-btn">Book</button></a>
                        </div>
                    </div>
                </div>


            </div>




</body>
</body>

</html>