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
        <h6>Velvet Sky Inn
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
                <img src="../images/hotel 5/creta-maris-beach-resort (1).jpg" alt="Main Image 1">
            </div>
            <div class="image-1">
                <img src="../images/hotel 5/creta-maris-beach-resort (2).jpg" alt="Image 1-1">
            </div>
            <div class="image-2">
                <img src="../images/hotel 5/creta-maris-beach-resort.jpg" alt="Image 1-2">
            </div>
            <div class="image3">
                <img src="../images/hotel 5/creta-maris-pool-villa (1).jpg" alt="Image 1-3">
            </div>
            <div class="image4">
                <img src="../images/hotel 5/creta-maris-pool-villa.jpg" alt="Image 1-4">
            </div>
            <div class="image5">
                <img src="../images/hotel 5/deluxe-pool-front-room.jpg" alt="Image 1-5">
            </div>
            <div class="image6">
                <img src="../images/hotel 5/deluxe-sea-view-room.jpg" alt=" Image 1-5">
            </div>
            <div class="image7">
                <img src="../images/hotel 5/unique-suites (1).jpg" alt="Image 1-5">
            </div>
            <div class="image8">
                <img src="../images/hotel 5/unique-suites.jpg" alt="Image 1-5">
            </div>

            <div class="card-container">

                <div class="row row-cols-4">
                    <div class="col">
                        <h4>Description:</h4>
                        <p>Step into a world of luxury and elegance at Velvet Sky Inn. Nestled amidst the beauty of nature, our inn offers a haven of comfort and sophistication for discerning travelers. As you enter, you'll be greeted by an atmosphere of timeless charm and modern allure, where every detail has been meticulously crafted to ensure an exceptional stay. Our well-appointed rooms offer a serene retreat, while our panoramic views captivate your senses and inspire relaxation. Indulge in delectable dining, unwind in our tranquil spa, and let our attentive staff cater to your desires. At Velvet Sky Inn, you'll experience a blend of opulence and serenity that defines true hospitality.</p>
                    </div>

                </div>

            </div>

            <div class="reserve-form-container">
                <form action="../pages/booking-process-5.php" method="POST" class="reserveForm">

                    <label for="hotel-name" name="hotel-name" style="font-weight: 500;"> Velvet Sky Inn:
                    </label> <br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required> <br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>

                    <label for="roomtype">Select Room Type:</label>
                    <select id="roomtype" name="roomtype">
                        <option value="single">Single Room : ZAR 2,867.00 per night</option>
                        <option value="double">Double Room : ZAR 3,300.00 per night</option>
                        <option value="twin">Twin Room : ZAR 3,005.00 per night</option>
                        <option value="suite">Suite : ZAR 3,950.00 per night</option>
                    </select> <br>

                    <button type="submit" class="reserve-btn">Reserve</button>
                </form>

            </div>


            <div class="amenities">
                <h4 class="amenities-title">Amenities</h4>
                <ul class="list">
                    <li><i class="bi bi-wifi"></i> Free Wi-Fi</li>
                    <li><i class="bi bi-tv"></i> Wellness Center</li>
                    <li><i class="bi bi-water"></i> Indoor & Outdoor Pool Access</li>
                </ul>
            </div>


        </div>

    </div>
    </div>

    </div>
</body>