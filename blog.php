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
    <h1 class="head">Our Certificate & Online Programs For 2021</h1>


</section>

<!-------------blog page contant---------------->

<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="images/certificate.jpg">
            <h2>Our Certificate & Online Programs For 2021</h2>
            <p>Due to increase in competition in various areas like Finance, Information Technology, Engineering, Medicines, Project Management, Teaching etc getting a Certification Course has become necessary for a person to stand ahead of others in competition.</p>
            <br>
            <p>At those times when companies hire new employees or analyze their job performance, preference is given to those candidates who are a Certified Professional. Certification Course helps an individual to showcase his competency, commitment for the profession, build expertise in his professional subject area, and helps with job advancement. It is a designation earned by a person giving a kind of assurance to the company of his competencies of performing a job.</p>
            <br>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
             
            <div class="comment-box">
                <h3>Leave a Comment</h3>
                <form action="" class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                </form>
            </div>


        </div>
        <div class="blog-right">
            <h3>Post Categories</h3>
            <div>
                <span>Business Analitics</span>
                <span>21</span>
            </div>
            <div>
                <span>Data Science</span>
                <span>28</span>
            </div>
            <div>
                <span>Machine Learning</span>
                <span>11</span>
            </div>
            <div>
                <span>Computer Science</span>
                <span>25</span>
            </div>
            <div>
                <span>Deep Learning</span>
                <span>71</span>
            </div>
            <div>
                <span>Artificial Intelligence</span>
                <span>22</span>
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