<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require __DIR__ . "/../includes/db.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userNameOrEmail = $_POST['username'];
    $password = $_POST['password'];

    // Perform user existence check based on username or email
    $checkStmt = $connection->prepare("SELECT id, password FROM registration_table WHERE username = ? OR email = ?");
    $checkStmt->bind_param("ss", $userNameOrEmail, $userNameOrEmail);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows === 1) {
        // User exists, verify password
        $userRow = $result->fetch_assoc();
        if ($password === $userRow['password']) {
            // Password is correct, proceed with login
            $_SESSION['user_id'] = $userRow['id']; // Set the user ID in the session
            header("Location:../pages/dashboard.php");
            exit();
        } else {
            // Incorrect password
            $loginErrorMessage = "Incorrect password";
        }
    } else {
        // User does not exist
        $loginErrorMessage = "User does not exist, please register before attempting to login.";
    }

    $checkStmt->close();
}
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="../css/login.css">
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
        <a href="../landingPage.php" class="title-link">
            <h1 class="userWelcome">Traveltopia</h1>
        </a>


        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="#">Services</a>
            <a href="../landingPage.php#contact">Contact</a>
            <!-- <a href="#"><button class="btnLogout-popup">Login</button></a> -->
        </nav>
    </header>


    <form action="../pages/login.php" method="post" class="register-success">
        <?php if (isset($loginErrorMessage)) : ?>
            <h4><?php echo $loginErrorMessage; ?></h4>
            <button class="register-success-login-btn">Try Again!</button>
        <?php elseif (isset($loginErrorMessage)) : ?>
            <h4><?php echo $loginErrorMessage; ?></h4>
            <button class="register-success-login-btn"></button>
        <?php else : ?>
            <!-- Default form content -->
        <?php endif; ?>
    </form>


</html>