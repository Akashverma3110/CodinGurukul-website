<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gurukul</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.php"><img src="images/logo10.png" alt="gurukul"></a>
        <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="course.php">COURSE</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="log-in.php">SIGN-IN/REGISTER</a></li>
            </ul>


        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
        


    </nav>
    <h1 class="head">Contact Us</h1>


</section>


<!-------------contact-us---------------->
<section class="location">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14329.478083630249!2d83.84081118035786!3d26.119492035608097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399230b52aff14eb%3A0x22c376c7c9f24de3!2sBelthara%2C%20Uttar%20Pradesh%20221715!5e0!3m2!1sen!2sin!4v1622583935790!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>Belthara Road, Maurya Building</h5>
                    <p>Ballia, Uttar Pradesh, IN</p>
                </span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>
                    <h5>+91 987654321</h5>
                    <p>Monday to Saturday, 10AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="far fa-envelope"></i>
                <span>
                    <h5>info@codeingurukul.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>


        </div>

        <div class="contact-col">
            <form action="form-handler.php" method="POST">
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="email" name="email" placeholder="Enter email address " required>
                <input type="text" name="subject" placeholder="Enter Your Subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>



            
        </div>
    </div>
</section>







<!--------footer------->
<setion class="footer">
    <h4>About Us</h4>
    <p>Coding Gurukul is an entrepreneurial journey nurtured by technological evangelist with a mission to create a developer ecosystem around the nation.</p>
    <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>


    </div>
    <p>Made with <i class="far fa-heart"></i> by Omkar Verma</p>
</setion>




  <!--------javascript for toggle menu------->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }


</script>

</body>
</html>