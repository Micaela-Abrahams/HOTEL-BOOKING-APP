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
                <img src="../images/hotel 2/apanemo-hotel-suites (1).jpg" alt="Main Image 1">
            </div>
            <div class="image-1">
                <img src="../images/hotel 2/apanemo-hotel-suites (2).jpg" alt="Image 1-1">
            </div>
            <div class="image-2">
                <img src="../images/hotel 2/apanemo-hotel-suites (3).jpg" alt="Image 1-2">
            </div>
            <div class="image3">
                <img src="../images/hotel 2/apanemo-hotel-suites (4).jpg" alt="Image 1-3">
            </div>
            <div class="image4">
                <img src="../images/hotel 2/apanemo-hotel-suites (5).jpg" alt="Image 1-4">
            </div>
            <div class="image5">
                <img src="../images/hotel 2/apanemo-hotel-suites.jpg" alt="Image 1-5">
            </div>
            <div class="image6">
                <img src="../images/hotel 2/apanemo.jpg" alt="Image 1-5">
            </div>
            <div class="image7">
                <img src="../images/hotel 2/infinity-pool-overlooking.jpg" alt="Image 1-5">
            </div>
            <div class="image8">
                <img src="../images/hotel 2/le-meridien-beach-plaza.jpg" alt="Image 1-5">
            </div>

            <div class="card-container">

                <div class="row row-cols-4">
                    <div class="col">
                        <h4>Description:</h4>
                        <p>Welcome to Aurora Plaza, where luxury and comfort intertwine to create an unforgettable stay. Nestled in the heart of a bustling city, our hotel offers a serene oasis for both business and leisure travelers. Immerse yourself in elegant surroundings and modern amenities, from spacious rooms adorned with panoramic views to exquisite dining options that cater to your every craving. Relax by our inviting indoor and outdoor pools, indulge in rejuvenating spa treatments, and experience personalized service that exceeds your expectations. Whether you're here to explore the city's vibrant culture or unwind in opulent tranquility, Aurora Plaza is your gateway to a remarkable journey.</p>
                    </div>

                </div>

            </div>

            <div class="reserve-form-container">
                <form action="booking-process.php" method="POST" class="reserveForm">
                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required> <br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>

                    <label for="roomtype">Select Room Type:</label>
                    <select id="roomtype" name="roomtype">
                        <option value="single">Single Room : ZAR 2,324.00 per night</option>
                        <option value="double">Double Room : ZAR 2,800.00 per night</option>
                        <option value="twin">Twin Room : ZAR 2,500 per night</option>
                        <option value="suite">Suite : ZAR 3,450.00 per night</option>
                    </select> <br>

                    <button type="submit" class="reserve-btn">Reserve</button>
                </form>

            </div>


            <div class="amenities">
                <h4 class="amenities-title">Amenities</h4>
                <ul class="list">
                    <li><i class="bi bi-wifi"></i> Free Wi-Fi</li>
                    <li><i class="bi bi-tv"></i> Wellness Center</li>
                    <!-- <li><i class="fas fa-baseball-ball"></i> Tennis Court</li> -->
                    <li><i class="bi bi-cup-straw"></i> Bar</li>
                    <li><i class="bi bi-water"></i> Indoor & Outdoor Pool Access</li>
                </ul>
            </div>

        </div>

    </div>
    </div>

    </div>
</body>