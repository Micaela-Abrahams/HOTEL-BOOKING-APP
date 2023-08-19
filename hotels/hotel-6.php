<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landingPage.css">
    <link rel="stylesheet" href="../css/hotels.css">
    <title>Document</title>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Include Bootstrap CSS (place this in the <head> section) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap Icons CSS (place this in the <head> section) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <!-- Header Section at the Top of the Page that consists of the Logo, links  & Login Button -->
    <header class="bg-white shadow-sm ">
        <h1 class="userWelcome">Traveltopia <?php echo $_SESSION['name']; ?></h1>
        <h6>Crystal Bay Residency
        </h6>


        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="../pages/gallery.php">Gallery</a>
            <a href="../landingPage.php#contact">Contact</a>
            <a href="../pages/dashboard.php">View Hotels</a>
            <a href="#">Bookings</a>
            <a href="../pages/login.php"><button class="btnLogout-popup">Logout</button></a>
        </nav>
    </header>
    <!-- <h2 class="hotel-1-title">Radiant Oasis Retreat </h2> -->

    <div class="container">
        <!-- First Set -->
        <div class="grid-set">
            <div class="Main-Image">
                <img src="../images/hotel 6/areal-of-farivlahu-restaurant.jpg" alt="Main Image 1">
            </div>
            <div class="image-1">
                <img src="../images/hotel 6/jacuzzi-beach-villa-deck.jpg" alt="Image 1-1">
            </div>
            <div class="image-2">
                <img src="../images/hotel 6/jacuzzi-beach-villa-exterior.jpg" alt="Image 1-2">
            </div>
            <div class="image3">
                <img src="../images/hotel 6/jacuzzi-water-villa-jetty.jpg" alt="Image 1-3">
            </div>
            <div class="image4">
                <img src="../images/hotel 6/jacuzzi-water-villas.jpg" alt="Image 1-4">
            </div>
            <div class="image5">
                <img src="../images/hotel 6/maalan-buffet-restaurant.jpg" alt="Image 1-5">
            </div>
            <div class="image6">
                <img src="../images/hotel 6/meeru-beach-villa.jpg" alt="Image 1-5">
            </div>
            <div class="image7">
                <img src="../images/hotel 6/meeru-love-boat-excursion.jpg" alt="Image 1-5">
            </div>
            <div class="image8">
                <img src="../images/hotel 6/meeru-over-water-asian.jpg" alt="Image 1-5">
            </div>

            <div class="card-container">

                <div class="row row-cols-4">
                    <div class="col">
                        <h4>Description:</h4>
                        <p>Welcome to Crystal Bay Residency, where the allure of coastal beauty meets unmatched comfort. Situated along the glistening shores, our hotel offers a captivating escape that combines modern luxury with the charm of the sea. Each room is a retreat of sophistication, adorned with contemporary amenities and designed to provide both relaxation and inspiration. Bask in the serenity of the sea breeze from your private balcony, savor culinary delights that mirror the flavors of the ocean, and immerse yourself in the rejuvenating embrace of our wellness offerings. Whether you seek an idyllic beach getaway or a tranquil sanctuary, Crystal Bay Residency promises an enchanting experience that echoes the rhythms of the waves.</p>
                    </div>

                </div>

            </div>

            <div class="reserve-form-container">
                <form action="../pages/booking-process-6.php" method="POST" class="reserveForm">

                    <label for="hotel-name" name="hotel-name" style="font-weight: 500;"> Crystal Bay Residency:
                    </label> <br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required> <br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>

                    <label for="roomtype">Select Room Type:</label>
                    <select id="roomtype" name="roomtype">
                        <option value="single">Single Room : ZAR 1,522.00 per night</option>
                        <option value="double">Double Room : ZAR 1,900.00 per night</option>
                        <option value="twin">Twin Room : ZAR 1,750.00 per night</option>
                        <option value="suite">Suite : ZAR 2,300.00 per night</option>
                    </select> <br>

                    <button type="submit" class="reserve-btn">Reserve</button>
                </form>

            </div>


            <div class="amenities">
                <h4 class="amenities-title">Amenities</h4>
                <ul class="list">
                    <li><i class="bi bi-wifi"></i> Free Wi-Fi</li>
                    <li><i class="bi bi-cup-straw"></i> Bar</li>
                    <li><i class="bi bi-water"></i> Indoor & Outdoor Pool Access</li>
                </ul>
            </div>


        </div>

    </div>
    </div>

    </div>
</body>