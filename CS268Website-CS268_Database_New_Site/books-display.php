<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <!--custom style-->
    <link rel="stylesheet" href="style/index.css">
    <!--Style for icons-->
    <script src="https://kit.fontawesome.com/48e57d5629.js" crossorigin="anonymous"></script></head>
    
</head>
<body>
    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.html" class="text-gray">Freedom Reigns</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="archive.html">Archive</a>
                    </li>
                    <li class="nav-link">
                        <a href="aboutMe.html">About Me</a>
                    </li>
                    <li class="nav-link">
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-link">
                        <a href="books-display.php">Books</a>
                    </li>
                    
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/abby.murphy.98"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/abby_msnr/"><i class="fab fa-instagram"></i></a>
                <a href="login.html"><i class="fa-solid fa-user"></i></a>

            </div>
        </div>
    </nav>

    <!-- ------------x--------------- Body --------------------------x------------------- -->
    <div class="books-grid-container" style="display: grid; grid-template-columns: 35% 35% 30%;">
    <?php require_once 'connect.php'; ?>
    <?php
    // Query the database to retrieve user data
    $query = "SELECT image_url, author, title, summary FROM books";
    $result = mysqli_query($con, $query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image_url = $row["image_url"];
            $title = $row["title"];
            $author = $row["author"];
            $summary = $row["summary"];
    
            // Check if the title is "the vanishing half"
            $url_title = "The Vanishing Half";
            $padding = ($title === $url_title) ? "15%" : "20%";
            $padding_top = ($title === $url_title) ? "25%" : "";
    
            ?>
    
            <div class='books-grid-item' style='padding: <?php echo $padding; ?>; padding-top: <?php echo $padding_top; ?>; text-align: center'>
                <img src='<?php echo $image_url; ?>' alt='<?php echo $title; ?>' class='book-image'>
                <h1><?php echo $title; ?></h1>
                <p style="font-size: 26px;"><?php echo $author; ?></p>
                <div class="summary-scroll">
                    <p style="font-size: 20px;"><?php echo $summary; ?></p>
                </div>
            </div>
    
            <?php
        }
    } else {
        echo "No results found.";
    }
    ?>
</div>

<?php
// Close database connection
$con->close();
?>


    <!-- --------------------------- Footer ---------------------------------------- -->

<footer class="footer">
    <div class="container">
        <div class="about-us">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                iure, autem nulla tenetur repellendus.</p>
        </div>
        <div class="newsletter">
            <h2>Subscribe</h2>
            <p>Never miss a post!</p>
            <div class="form-element">
                <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
        <div class="instagram">
            <h2>Instagram</h2>
            <div class="flex-row">
                <img src="./assets/insta/insta1.jpeg" alt="insta1">
                <img src="./assets/insta/insta2.jpeg" alt="insta2">
                <img src="./assets/insta/insta3.jpeg" alt="insta3">
            </div>
            <div class="flex-row">
                <img src="./assets/insta/insta4.jpeg" alt="insta4">
                <img src="./assets/insta/insta5.jpeg" alt="insta5">
                <img src="./assets/insta/insta6.jpeg" alt="insta6">
            </div>
        </div>
        <div class="follow">
            <h2>Stop by!</h2>
            <div>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </div>
    <div class="rights flex-row">
        <h4 class="text-gray">
            Copyright ©223 All rights reserved | made by the cool kids 
        </h4>
    </div>
    <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
</footer>


   <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Slick Carousel -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 
   <!-- Custom Script -->
 <script src="/functionality.js"></script>
</body>
</html>