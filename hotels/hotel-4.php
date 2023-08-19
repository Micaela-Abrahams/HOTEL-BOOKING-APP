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
                <img src="../images/hotel 4/anastasis-apartments.jpg" alt="Main Image 1">
            </div>
            <div class="image-1">
                <img src="../images/hotel 4/caption (1).jpg" alt="Image 1-1">
            </div>
            <div class="image-2">
                <img src="../images/hotel 4/caption (2).jpg" alt="Image 1-2">
            </div>
            <div class="image3">
                <img src="../images/hotel 4/caption (3).jpg" alt="Image 1-3">
            </div>
            <div class="image4">
                <img src="../images/hotel 4/caption (4).jpg" alt="Image 1-4">
            </div>
            <div class="image5">
                <img src="../images/hotel 4/caption (5).jpg" alt="Image 1-5">
            </div>
            <div class="image6">
                <img src="../images/hotel 4/caption (6).jpg" alt="Image 1-5">
            </div>
            <div class="image7">
                <img src="../images/hotel 4/caption.jpg" alt="Image 1-5">
            </div>
            <div class="image8">
                <img src="../images/hotel 4/img-20190809-190806-largejpg.jpg" alt="Image 1-5">
            </div>

            <div class="card-container">

                <div class="row row-cols-4">
                    <div class="col">
                        <h4>Description:</h4>
                        <p>Welcome to Serene Haven Suites, your haven of tranquility in the heart of urban excitement. Our boutique hotel is a sanctuary where sophistication meets serenity, offering a refined escape for both business and leisure travelers. Immerse yourself in the allure of our exquisitely designed suites, each adorned with modern amenities and thoughtfully curated touches. From the moment you step into our elegant lobby, you'll be enveloped in a sense of calm that permeates every corner of our property. Unwind in our lush courtyard, indulge in gourmet dining experiences, and experience warm and attentive service that anticipates your every need. At Serene Haven Suites, we invite you to embrace relaxation and revel in the harmony of a truly serene experience.</p>
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
                        <option value="single">Single Room : ZAR 950.00 per night</option>
                        <option value="double">Double Room : ZAR 1,500.00 per night</option>
                        <option value="twin">Twin Room : ZAR 1,290.00 per night</option>
                        <option value="suite">Suite : ZAR 1,995.00 per night</option>
                    </select> <br>

                    <button type="submit" class="reserve-btn">Reserve</button>
                </form>

            </div>


            <div class="amenities">
                <h4 class="amenities-title">Amenities</h4>
                <ul class="list">
                    <li><i class="bi bi-wifi"></i> Free Wi-Fi</li>
                    <li><i class="bi bi-fan"></i> Air Conditioning</li>
                    <li><i class="bi bi-star"></i> Toiletries</li>
                    <li><i class="bi bi-cup-straw"></i> Bar</li>
                    <li><i class="bi bi-water"></i> Indoor & Outdoor Pool Access</li>
                </ul>
            </div>


        </div>

    </div>
    </div>

    </div>
</body>