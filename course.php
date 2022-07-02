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
    <h1 class="head">Our Courses</h1>


</section>


<!------courses-------------->

<section class="course">
    <h1>Levels of Learning</h1>
    <p>Learn in an interactive environment. From beginner to advance</p>
    
    <div class="row">
        <div class="course-col">
            <h3>Beginner</h3>
            <p>Learn programming from scratch, and practice in an intuitive environment. Throughout this course, you will learn the fundamental programming concepts. Learn Programming is suitable for beginners who have never written a line of code.</p>


        </div>
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>Intermediate level programming builds upon the learners' foundational knowledge in a content area. Programming at the intermediate level includes more depth than that which is associated with a beginning level program.</p>


        </div>
        <div class="course-col">
            <h3>Advanced</h3>
            <p>CE program content at an advanced level builds upon established
experience, knowledge and skills in the content area. This may include more
diverse applications to specific populations or a novel application of the skill
presented.</p>


        </div>


    </div>



</section>
<!----campus-->
<section class="campus">
    <h1>Courses we offer</h1>
    <p>It's time to learn programming in a fun & engaging way</p>

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