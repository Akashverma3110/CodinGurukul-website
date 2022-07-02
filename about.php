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
    <h1 class="head">About Us</h1>


</section>

<!----------------about us----------------->

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>We are world finest online teaching platform</h1>
            <p> CodinGurukul is the world's #1 online bootcamp for programming skills training focused on helping people acquire the skills they need to thrive in the coding.

We provide rigorous online training in disciplines such as Cyber Security, Cloud Computing, Project Management, Digital Marketing, and Data Science, among others. In other words, we specialize in areas where technologies and best practices are changing rapidly, and the demand for qualified candidates significantly exceeds supply.

Based in San Francisco, California, and Bangalore, India, we have helped over two million professionals, and companies across 150+ countries get trained, acquire certifications, and upskill their employees.

Our award-winning online bootcamps are designed and updated by 2000+ renowned industry and academic experts. Through individual courses, comprehensive certification programs, and partnerships with world-renowned universities, we provide millions of professionals and thousands of corporate training organizations with the work-ready skills they need to excel in their careers. Our practical and applied approach has resulted in 85 percent of learners reporting career benefits including promotions and new jobs after completing the training. With over 1,500 live classes each month, real-world projects, and more, professionals learn by doing at codingurukul.</p>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="images/banner2.jpg" alt="">
            
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