<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landingPage.css">
    <link rel="stylesheet" href="../css/hotel-1.css">
    <title>Document</title>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- EXTERNAL CSS CDN LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <h4>Single Room</h4>
                        <p>Experience tranquility in our Single Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for solo travelers seeking comfort and convenience. With a plush single bed and a calming atmosphere, you'll find the perfect haven for rest and relaxation. Our Single Rooms provide a harmonious blend of modern amenities and a cozy retreat.</p>
                    </div>
                    <div class="col">
                        <h4>Double Room</h4>
                        <p>Indulge in comfort with our Double Rooms at Radiant Oasis Retreat. Featuring a luxurious double bed, these rooms provide a serene escape for couples or those who appreciate extra space. Immerse yourself in a blend of contemporary elegance and serene ambiance. Whether it's a romantic getaway or a well-deserved vacation, our Double Rooms offer a delightful stay.</p>
                    </div>
                    <div class="col">
                        <h4>Twin Room</h4>
                        <p>Our Twin Rooms at Radiant Oasis Retreat offer a comfortable and spacious stay for travelers. Furnished with two cozy twin beds, these rooms are perfect for friends or colleagues traveling together. Enjoy modern amenities, elegant decor, and a relaxing ambiance. Whether you're here for business or leisure, our Twin Rooms provide a peaceful retreat after a long day.</p>
                    </div>
                    <div class="col">
                        <h4>Suite</h4>
                        Elevate your stay with our exquisite Suites at Radiant Oasis Retreat. Designed for those seeking the ultimate in luxury and space, our Suites offer a separate living area, a plush bedroom, and stunning views. Pamper yourself with upscale amenities, elegant decor, and personalized services. Whether you're traveling for a special occasion or simply wish to indulge, our Suites provide a lavish oasis of comfort and style.
                    </div>
                </div>



                <!-- <div class="card">
                    <h4>Single Room</h4>
                    <p>Experience tranquility in our Single Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for solo travelers seeking comfort and convenience. With a plush single bed and a calming atmosphere, you'll find the perfect haven for rest and relaxation. Our Single Rooms provide a harmonious blend of modern amenities and a cozy retreat.</p>
                </div>

                <div class="card">
                    <h4>Double Room</h4>
                    <p>Indulge in comfort with our Double Rooms at Radiant Oasis Retreat. Featuring a luxurious double bed, these rooms provide a serene escape for couples or those who appreciate extra space. Immerse yourself in a blend of contemporary elegance and serene ambiance. Whether it's a romantic getaway or a well-deserved vacation, our Double Rooms offer a delightful stay.</p>
                </div>

                <div class="card">
                    <h4>Twin Room</h4>
                    <p>Our Twin Rooms at Radiant Oasis Retreat offer a comfortable and spacious stay for travelers. Furnished with two cozy twin beds, these rooms are perfect for friends or colleagues traveling together. Enjoy modern amenities, elegant decor, and a relaxing ambiance. Whether you're here for business or leisure, our Twin Rooms provide a peaceful retreat after a long day.</p>
                </div>

                <div class="card">
                    <h4>Suite</h4>
                    Elevate your stay with our exquisite Suites at Radiant Oasis Retreat. Designed for those seeking the ultimate in luxury and space, our Suites offer a separate living area, a plush bedroom, and stunning views. Pamper yourself with upscale amenities, elegant decor, and personalized services. Whether you're traveling for a special occasion or simply wish to indulge, our Suites provide a lavish oasis of comfort and style.
                </div> -->
            </div>

        </div>

    </div>
    </div>


    <!-- <form action="booking_process.php" method="POST">
        <label for="checkin">Check-in Date:</label>
        <input type="date" id="checkin" name="checkin" required>
        <br>
        <label for="checkout">Check-out Date:</label>
        <input type="date" id="checkout" name="checkout" required>

        <button type="submit">Reserve</button>
    </form> -->

    <!-- <div class="room-grid">
       
        <div class="room-card">
            <img src="room1.jpg" alt="Standard Room">
            <h3>Standard Room</h3>
            <p>A cozy room with basic amenities.</p>
        </div>

      
        <div class="room-card">
            <img src="room2.jpg" alt="Deluxe Room">
            <h3>Deluxe Room</h3>
            <p>A spacious room with additional amenities.</p>
        </div> -->

    <!-- Add more rooms as needed -->
    </div>
</body>