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
        <h6>Majestic Horizons Resort
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
                <img src="../images/hotel 3/atrium-palace-thalasso (1).jpg" alt="Main Image 1">
            </div>
            <div class="image-1">
                <img src="../images/hotel 3/atrium-palace-thalasso (2).jpg" alt="Image 1-1">
            </div>
            <div class="image-2">
                <img src="../images/hotel 3/atrium-palace-thalasso (3).jpg" alt="Image 1-2">
            </div>
            <div class="image3">
                <img src="../images/hotel 3/atrium-palace-thalasso (4).jpg" alt="Image 1-3">
            </div>
            <div class="image4">
                <img src="../images/hotel 3/atrium-palace-thalasso (5).jpg" alt="Image 1-4">
            </div>
            <div class="image5">
                <img src="../images/hotel 3/atrium-palace-thalasso.jpg" alt="Image 1-5">
            </div>
            <div class="image6">
                <img src="../images/hotel 3/spa-entrance.jpg" alt="Image 1-5">
            </div>
            <div class="image7">
                <img src="../images/hotel 3/pool-bar.jpg" alt="Image 1-5">
            </div>
            <div class="image8">
                <img src="../images/hotel 3/spa-pool.jpg" alt="Image 1-5">
            </div>

            <div class="card-container">

                <div class="row row-cols-4">
                    <div class="col">
                        <h4>Description:</h4>
                        <p>Discover the epitome of luxury and relaxation at Majestic Horizons Resort. Nestled amidst pristine landscapes, our resort offers a sanctuary of serenity where every moment is designed to elevate your senses. Immerse yourself in the grandeur of our elegantly appointed rooms, each offering breathtaking views that stretch across lush gardens and azure waters. Unwind by our private beaches, indulge in world-class spa treatments, and savor gourmet dining experiences that tantalize your taste buds. With a blend of refined elegance and modern sophistication, Majestic Horizons Resort promises an unforgettable escape where your dreams and desires take center stage.</p>
                    </div>

                </div>

            </div>

            <div class="reserve-form-container">
                <form action="../pages/booking-process-3.php" method="POST" class="reserveForm">

                    <label for="hotel-name" name="hotel-name" style="font-weight: 500;"> Radiant Oasis Retreat:
                    </label> <br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required> <br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>

                    <label for="roomtype">Select Room Type:</label>
                    <select id="roomtype" name="roomtype">
                        <option value="single">Single Room : ZAR 1,364.00 per night</option>
                        <option value="double">Double Room : ZAR 1,999.00 per night</option>
                        <option value="twin">Twin Room : ZAR 1,050.00 per night</option>
                        <option value="suite">Suite : ZAR 2,450.00 per night</option>
                    </select> <br>

                    <button type="submit" class="reserve-btn">Reserve</button>
                </form>

            </div>


            <div class="amenities">
                <h4 class="amenities-title">Amenities</h4>
                <ul class="list">
                    <li><i class="bi bi-wifi"></i> Free Wi-Fi</li>
                    <li><i class="bi bi-tv"></i> Wellness Center</li>
                    <li><i class="bi bi-cup-straw"></i> Bar</li>
                    <li><i class="bi bi-water"></i> Indoor & Outdoor Pool Access</li>
                </ul>
            </div>


        </div>

    </div>
    </div>

    </div>
</body>