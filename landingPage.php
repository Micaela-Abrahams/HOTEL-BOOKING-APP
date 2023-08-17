<?php
//session_start(); // Start the session

// if (isset($_POST['name'])) {
//     $_SESSION['name'] = $_POST['name']; // Store the name in the session variable
// } else {
//     $_SESSION['name'] = ""; // Set a default value if the name is not provided
// }
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landingPage.css">
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
            <a href="#about">About</a>
            <a href="#">Services</a>
            <a href="#contact">Contact</a>
            <a href="./pages/login.php"><button class="btnLogout-popup">Login / Register</button></a>
        </nav>
    </header>


    <!-- Hotel Carousel -->
    <!-- Slide images from left to right/right to left -->
    <div class="container">
        <h1 class="display-3 text-center fw-bold my-4">Welcome to Traveltopia</h1>
        <h3 class="display text-center fw-bold my-4">Slide through our selection</h3>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Radiant Oasis Retreat</h1>
                            <p>Unwind in the lap of nature at Radiant Oasis Retreat, where modern amenities harmonize with the natural world. Surrounded by lush landscapes and serene waters, our retreat offers a holistic experience to rejuvenate mind, body, and soul.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Aurora Plaza <br>Hotel</h1>
                            <p>Welcome to the vibrant world of Aurora Plaza Hotel, where modern elegance meets urban excitement. Located in the heart of the city, our hotel offers easy access to cultural landmarks, shopping districts, and a pulsating nightlife.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Majestic Horizons Resort</h1>
                            <p>Embark on a journey of luxury and grandeur at Majestic Horizons Resort. Set against a backdrop of rolling hills and open skies, our resort boasts opulent amenities and breathtaking vistas that redefine the meaning of indulgence.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80" alt="" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Serene Haven Suites</h1>
                            <p>Immerse yourself in tranquility at Serene Haven Suites, where every stay is a peaceful escape. Nestled amidst lush gardens and offering luxurious accommodations, our hotel is the perfect haven for those seeking a serene retreat.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=749&q=80" alt="" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Velvet Sky Inn</h1>
                            <p>Discover comfort like never before at Velvet Sky Inn, where plush furnishings and warm ambiance create an inviting atmosphere. Whether you're here for business or leisure, our attentive staff ensures your stay is as smooth as velvet.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Crystal Bay Residency</h1>
                            <p>Experience the allure of Crystal Bay Residency, a coastal gem offering breathtaking ocean views from every window. With its elegant architecture and exceptional service, this hotel is a sanctuary of relaxation and sophistication.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <h1 id="about" class="about-section">About</h1>
        <p>Welcome to the future of hassle-free travel planning with Traveltopia's innovative booking system. Designed with your convenience in mind, our platform empowers you to effortlessly create, customize, and embark on unforgettable journeys.
            <br>

            Say goodbye to the complexities of travel arrangements. With Traveltopia, you're in control. Our user-friendly interface puts the world at your fingertips, allowing you to choose from a wide range of accommodations, destinations, and activities that align with your unique preferences.
            <br>
            <br>
            Immerse yourself in the art of personalization as you curate your ideal itinerary. From luxurious city getaways to idyllic beach retreats, our diverse selection of hotels, resorts, and lodges ensures that every traveler's vision is brought to life.

            Experience the power of simplicity as you navigate through seamless booking processes. Secure your dream accommodations and activities effortlessly, while our secure payment gateway guarantees a worry-free transaction experience.
            <br>
            <br>
            Whether you're a solo explorer, a family seeking adventure, or a couple seeking a romantic escape, Traveltopia's booking system tailors every detail to suit your needs. Your journey begins the moment you access our platform, and the possibilities are as limitless as your imagination.

            Embrace a new era of travel planning with Traveltopia Booking System – where your aspirations become itineraries and your dreams become reality. Your next adventure awaits; step into Traveltopia and unlock a world of boundless exploration.
        </p>


        <!-- Contact Section -->
        <h2 id="contact" class="mt-5 mb-5 pt-4 text-center fw-bold h-font"> Contact Us </h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded" height="320px" src="https:/www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505295.52536595665!2d114.64225366831114!3d-8.34037376105492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali%2C%20Indonesia!5e0!3m2!1sen!2sza!4v1692263380979!5m2!1sen!2sza" loading="lazy"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5> Call us: </h5>
                        <a href="tel: 069 777 2222" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> 069 777 2222
                        </a>
                        <br>
                        <a href="tel: 069 777 2222" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> 011 222 7777
                        </a>
                        <br>
                    </div>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5> Follow us: </h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram"></i> Instagram
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook"></i> Facebook
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-tiktok"></i> TikTok
                            </span>
                        </a>
                        <br>
                    </div>
                </div>
            </div>
        </div>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Jquery Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- EXTERNAL JS CDN LINKS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

    <script src="../js/script.js"></script>
    <!-- Icons Package -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>