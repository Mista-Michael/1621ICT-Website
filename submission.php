<?php 
    require_once "addDB.php";
    $customers = getCustomer();
?>

<!doctype html>
<html lang="en">

<head>
    <title>SaltBurger - The Salt of the Earth</title>
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
    
    <table id="submission-table">
        <thead>
            <tr>
                <th colspan="6" id="sub-head">Submissions</th>    
            </tr>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Issue</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <?php 
            foreach ($customers as $customer)
            {
        ?>
        <tr class="c-data">
            <td id="fname"><?= $customer["firstName"] ?></td>
            <td id="lname"><?= $customer["lastName"] ?></td>
            <td id="user-mail"><?= $customer["email"] ?></td>
            <td id="user-issue"><?= $customer["issue"] ?></td>
            <td id="user-subject"><?= $customer["subject"] ?></td>
            <td id="user-message"><?= $customer["message"] ?></td>
        </tr>
        <?php 
            } 
        ?>
    </table>

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