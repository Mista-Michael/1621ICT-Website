<?php 
    require_once "addDB.php";
    date_default_timezone_set("Australia/Brisbane");
    
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $subject = '';
    if ($_POST['subject'] === '') {
        $subject = "N/A";
    } else {
        $subject = $_POST['subject'];
    }
    $message = $_POST['message'];
    
    addCustomer($firstName, $lastName, $email, $issue, $subject, $message);
    
?>
<!doctype html>
<html lang="en">

<head>
    <title>SaltBurger - Thank you for your time</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/mobile.css" rel="stylesheet" type="text/css">
    <script src="/js/sketch.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32">
</head>

<body>
    <header id="site-header">
        <div id="header-container">
            <a href="index.html" id="saltburger-logo"><img src="./images/LOGO2.jpg" alt="Saltburger Logo"
                    title="Home"></a>
            <nav id="site-nav">
                <ul>
                    <li><a href="menu.html">MENU</a></li>
                    <li><a href="store.html">STORE</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="contact-form-banner"></div>
    <div class="page-container">
        <div id="thanks"class="page-box">
            <h4>Thank you for your time <?= $firstName . " " . $lastName . "." ?></h4>
            <p>Here at SaltBurger we take everything serious. We appreciate what time you wasted to fill out the form and will respond to you as soon as possible.</p>
            <form action="submission.php">
                <input type="submit" value="Submissions" class="bttn">
            </form>
        </div>
    </div>
        


    <footer id="site-footer">
        <div id="footer-container">
            <div id="foot-top">
                <div id="foot-logo" class="foot-box">
                    <ul>
                        <li>
                            <h5>SaltBurger</h5>
                        </li>
                        <li><a href="index.html"><img src="./images/logo.png" alt="Saltburger logo"></a></li>
                    </ul>
                </div>
                <div class="foot-box">
                    <ul>
                        <li>
                            <h5>Explore</h5>
                        </li>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="store.html">Store</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </div>
                <div class="foot-box">
                    <ul>
                        <li>
                            <h5>Customer Service</h5>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="foot-box">
                    <ul>
                        <li>
                            <h5>Legal</h5>
                        </li>
                        <li><a href="terms.html">Terms</a></li>
                        <li><a href="privacy-policy.html">Privacy</a></li>
                    </ul>
                </div>
                <div id="social-box">
                    <div id="social-text">
                        <h5>Follow Us</h5>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><img src="./images/social_links/google-plus-white-64.png"
                                        alt="google plus icon" height="30px"></a></li>
                            <li><a href="#"><img src="./images/social_links/facebook-white-64.png" alt="facebook icon"
                                        height="30px"></a></li>
                            <li><a href="#"><img src="./images/social_links/youtube-white-64.png" alt="youtube icon"
                                        height="30px"></a></li>
                            <li><a href="#"><img src="./images/social_links/instagram-white-64.png" alt="instagram icon"
                                        height="30px"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="foot-bot">
                <h6>© Michael Rodriguez 2019. All Rights Reserved</h6>
            </div>
        </div>
    </footer>
</body>

</html>