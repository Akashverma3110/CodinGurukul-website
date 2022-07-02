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
    <h1 class="head">LOG IN </h1>


</section>










	<section class="log-in">
	<div class="row">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" class="hero-btn red-btn">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
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





