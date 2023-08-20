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
        <h6>Radiant Oasis Retreat</h6>



        <nav class="navigation">
            <a href="../pages/landing-page2.php#about">About</a>
            <a href="../pages/landing-page2.php#contact">Contact</a>
            <a href="../pages/gallery2.php">Gallery</a>
            <a href="../pages/dashboard.php">View Hotels</a>
            <a href="../pages/view-bookings.php">Bookings</a>
            <a href="../pages/logout.php"><button class="btnLogout-popup">Logout</button></a>
        </nav>
    </header>

    <!---------------------------------- Main Content ---------------------------------->
    <div class="container">
        <!-- First Set -->
        <div class="grid-set">
            <div class="Main-Image">
                <img src="../images/hotel 1/image-1.jpg" alt="Main Image 1">
            </div>
            <div class="image-1">
                <img src="../images/hotel 1/image-2.jpg" alt="Image 1-1">
            </div>
            <div class="image-2">
                <img src="../images/hotel 1/image-3.jpg" alt="Image 1-2">
            </div>
            <div class="image3">
                <img src="../images/hotel 1/image-4.jpg" alt="Image 1-3">
            </div>
            <div class="image4">
                <img src="../images/hotel 1/image-5.jpg" alt="Image 1-4">
            </div>
            <div class="image5">
                <img src="../images/hotel 1/image-6.jpg" alt="Image 1-5">
            </div>
            <div class="image6">
                <img src="../images/hotel 1/image-7.jpg" alt="Image 1-5">
            </div>
            <div class="image7">
                <img src="../images/hotel 1/image-8.jpg" alt="Image 1-5">
            </div>
            <div class="image8">
                <img src="../images/hotel 1/image-9.jpg" alt="Image 1-5">
            </div>

            <div class="card-container">

                <div class="row row-cols-4">
                    <div class="col">
                        <h4>Description:</h4>
                        <p>Experience tranquility in our Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for travelers seeking comfort and convenience. With a plush bed and a calming atmosphere, you'll find the perfect haven for rest and relaxation. Our Rooms provide a harmonious blend of modern amenities and a cozy retreat.</p>
                    </div>

                </div>

            </div>

            <div class="reserve-form-container">
                <form action="../pages/booking-process-1.php" method="POST" class="reserveForm">

                    <label for="hotel-name" name="hotel-name" style="font-weight: 500;"> Radiant Oasis Retreat:
                    </label> <br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required> <br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>

                    <label for="roomtype">Select Room Type:</label>
                    <select id="roomtype" name="roomtype">
                        <option value="single">Single Room : ZAR 1,500.00 per night</option>
                        <option value="double">Double Room : ZAR 2,300.00 per night</option>
                        <option value="twin">Twin Room : ZAR 2,750.00 per night</option>
                        <option value="suite">Suite : ZAR 3,450.00 per night</option>
                    </select> <br>

                    <button type="submit" class="reserve-btn">Reserve</button>
                </form>

            </div>

            <div class="amenities">
                <h4 class="amenities-title">Amenities</h4>
                <ul class="list">
                    <li><i class="bi bi-wifi"></i> Free Wi-Fi</li>
                    <li><i class="bi bi-tv"></i> Flat-screen TV</li>
                    <li><i class="bi bi-fan"></i> Air Conditioning</li>
                    <li><i class="bi bi-star"></i> Toiletries</li>
                    <li><i class="bi bi-door-open"></i> Lounge Access</li>
                    <li><i class="bi bi-cup-straw"></i> Bar</li>
                    <li><i class="bi bi-water"></i> Indoor & Outdoor Pool Access</li>
                </ul>
            </div>

        </div>

    </div>
    </div>

    </div>
</body>