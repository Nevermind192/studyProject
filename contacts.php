<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php require_once "includes/header.php" ?>

        <div class="hero-contacts container">
            <div class="center-text">
                <a href="/">Home</a> > <a class="active" href="/contacts.php">Contact us</a>
                <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <img src="img/contacts/map.png" alt="">
            <div class="links">
                <div class="block media">
                    <h3>Follow us</h3>
                    <div class="media-icons">
                        <a href="#"><img src="img/contacts/facebook.png" alt=""></a>
                        <a href="#"><img src="img/contacts/insta.png" alt=""></a>
                        <a href="#"><img src="img/contacts/twitter.png" alt=""></a>
                        <a href="#"><img src="img/contacts/in.png" alt=""></a>
                    </div>
                </div>
                <hr>
                <div class="phone-number block">
                    <img src="img/contacts/phone.png" alt="">
                    <span>+94 4444 5555 6</span>
                </div>
                <hr>
                <div class="gps block">
                    <img src="img/contacts/gps.png" alt="">
                    <p>but also the leap into electronic typesetting</p>
                </div>
            </div>
        </div>

        <div class="feedback form-section">
            <div class="container">
                <h2>Say hello</h2>
                <p>Lorem Ipsum is simply dummy text of the printing .</p>

                <form>
                    <div class="inline">
                        <div>
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name">
                        </div>
                        <div>
                            <label for="second-name">Second Name</label>
                            <input type="text" id="second-name">
                        </div>
                    </div>
                    <label for="email-address">Email Address</label>
                    <input type="email" id="email-address" class="one-line">
                    <label for="message">Message</label>
                    <textarea class="one-line" id="message"></textarea>

                    <button type="button">Get in touch</button>
                </form>
            </div>
        </div>

        <?php require_once "includes/email.php" ?>
    </div>

    <?php require_once "includes/footer.php" ?>
</body>
</html>