<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>



















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
<section class="header">
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
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>


        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
        


    </nav>
<div class="text-box">

    <h1>Welcome to Codin<span class="gurukul">Gurukul</span></h1>
    <p>The idea of inculcating a Gurukul system in Indian education is just to <br>assist the children in understanding the concept of a balanced life. <br>This very ideology of balance should be taught to the kids from a <br>young age so that they make informed decisions about work, <br>food, exercise and the way they wish to live there life. </p>
    <a href="" class="hero-btn">Visit Us To know More</a>
</div>

<h1 class="name">Hello, <?php echo $_SESSION['name']; ?></h1>

</section>
<!----course-->

<section class="course">
    <h1>Courses Gurukul offers</h1>
    <p>The idea of inculcating a Gurukul system in Indian education</p>
    
    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>The idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian education </p>


        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>The idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian education </p>


        </div>
        <div class="course-col">
            <h3>Post Graduation</h3>
            <p>The idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian education </p>


        </div>


    </div>



</section>
<!----campus-->
<section class="campus">
    <h1>Our Global Campus</h1>
    <p>he idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian</p>

    <div class="row">
        <div class="campus-col">
            <img src="images/java-2.png">
            <div class="layer">
                <h3>JAVA</h3>
            </div> 

        </div>
        <div class="campus-col">
            <img src="images/python-2.png">
            <div class="layer">
                <h3>PYTHON</h3>
            </div> 

        </div>
        <div class="campus-col">
            <img src="images/full-stack.png">
            <div class="layer">
                <h3>FULL STACK</h3>
            </div> 

        </div>

    </div>


</section>

<!----facilities-->

<section class="facilities">
    <h1>Our Facilities</h1>
    <p>he idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian</p>
    <div class="row">
        <div class="facilities-col">
            <img src="images/lib.png" alt="">
            <h3>dian education The idsystem </h3>
            <p>he idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian</p>
        </div>
        <div class="facilities-col">
            <img src="images/park.png" alt="">
            <h3>dian education The idsystem </h3>
            <p>he idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian</p>
        </div>
        <div class="facilities-col">
            <img src="images/cafeteria-1.png" alt="">
            <h3>dian education The idsystem </h3>
            <p>he idea of inculcating a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indian</p>
        </div>
    </div>


</section>

<!-----testimonials-->

<section class="testimonials">
    <h1>What our student says</h1>
    <p>ting a Gurukul system in Indian education The idea of inculcating a Gurukul system i</p>

    <div class="row">
        <div class="testimonial-col">
            <img src="images/user1.jpg">
            <div>
                <p>ng a Gurukul system in Indian education The idea of inculcating a Gurukul system in Inding a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indi</p>
                <h3>Pragya verma</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="images/user2.png">
            <div>
                <p>ng a Gurukul system in Indian education The idea of inculcating a Gurukul system in Inding a Gurukul system in Indian education The idea of inculcating a Gurukul system in Indi</p>
                <h3>Omkar verma</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
            </div>
        </div>
        
    </div>


</section>

<!----call to action-->
<section class="cta">
    <h1>Enroll For Our Various Online Courses <br> Anywhere From The World</h1>
    <a href="" class="hero-btn">CONTACT US</a>
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


















<?php 
}else{
     header("Location: log-in.php");
     exit();
}
 ?>