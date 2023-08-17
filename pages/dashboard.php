<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landingPage.css">
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


    <!-- Radiant Oasis Retreat Hotel -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" class="card-img-top">

                    <div class="card-body">
                        <h4> Radiant Oasis Retreat</h4>
                        <h6 class="mb-4"> R660 per night </h6>
                        <div class="features mb-4">
                            <h5 class="mb-1"> Rooms: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Single
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Twin
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Suite
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h5 class="mb-1"> Amenities: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Bar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Indoor & Outdoor Pool
                            </span>
                        </div>
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

            <!--Aurora Plaza Hotel -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="card-img-top">

                    <div class="card-body">
                        <h4> Aurora Plaza </h4>
                        <h6 class="mb-4"> R2,324 per night </h6>
                        <div class="features mb-4">
                            <h5 class="mb-1"> Rooms: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Single
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Twin
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Suite
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h5 class="mb-1"> Amenities: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wellness Center
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Bar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tennis Court
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Indoor & Outdoor Pool
                            </span>
                        </div>
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

            <!-- Majestic Horizons Resort Hotel -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" class="card-img-top">

                    <div class="card-body">
                        <h4> Majestic Horizons Resort</h4>
                        <h6 class="mb-4"> R1,364 per night </h6>
                        <div class="features mb-4">
                            <h5 class="mb-1"> Rooms: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Twin
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Double
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h5 class="mb-1"> Amenities: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wellness Center
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tennis Court
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Indoor & Outdoor Pool
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h5 class="mb-1"> Rating: </h5>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <a href="../hotels/hotel-3.php"> <button class="go-to-hotel-btn">Book</button></a>
                    </div>
                    </form>
                </div>
            </div>

            <!-- Majestic Horizons Resort Hotel -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80" class="card-img-top">

                    <div class="card-body">
                        <h4>Serene Haven Suites</h4>
                        <h6 class="mb-4"> R757 per night </h6>
                        <div class="features mb-4">
                            <h5 class="mb-1"> Rooms: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Suite
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h5 class="mb-1"> Amenities: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Bar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Indoor & Outdoor pool
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h5 class="mb-1"> Rating: </h5>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <a href="../hotels/hotel-4.php"> <button class="go-to-hotel-btn">Book</button></a>
                    </div>
                    </form>
                </div>
            </div>


            <!--Velvet Sky Inn  Hotel -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=749&q=80" class="card-img-top">

                    <div class="card-body">
                        <h4> Velvet Sky Inn </h4>
                        <h6 class="mb-4"> R2,667 per night </h6>
                        <div class="features mb-4">
                            <h5 class="mb-1"> Rooms: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Single
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Twin
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Suite
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h5 class="mb-1"> Amenities: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wellness Center
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Bar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tennis Court
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Indoor & Outdoor pool
                            </span>
                        </div>
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
                        <a href="../hotels/hotel-5.php"> <button class="go-to-hotel-btn">Book</button></a>
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
                        <h6 class="mb-4"> R1,522 per night </h6>
                        <div class="features mb-4">
                            <h5 class="mb-1"> Rooms: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Twin
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Suite
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h5 class="mb-1"> Amenities: </h5>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wellness Center
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Bar
                            </span>
                        </div>
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
                    </form>
                </div>
            </div>









            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

            <!-- Jquery Script -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <!-- EXTERNAL JS CDN LINKS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


            <script src="../js/script.js"></script>
            <!-- Icons Package -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>