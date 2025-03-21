<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about.css">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php require_once "includes/header.php" ?>

        <div class="hero-about container">
            <div class="info">
                <a href="/">Home</a> > <a class="active" href="/about.php">About us</a>
                <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <button class="btn">Get in touch <img src="img/aboutUs/arrow-btn.png" alt=""> </button>
            </div>
            <img src="/img/aboutUs/about-banner.png" alt="">
        </div>

        <div class="work container">
            <h2>Why work with us</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Lorem ipsum</span>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="block">
                    <span class="badge brown">Lorem ipsum</span>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="block">
                    <span class="badge green">Lorem ipsum</span>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>

        <div class="description">
            <div class="container">
                <img src="img/aboutUs/description1.png" alt="">
                <div class="info">
                    <span>Lorem ipsum</span>
                    <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                </div>
            </div>
        </div>

        <div class="team container">
            <h2>Our Team</h2>
            <div class="blocks">
                <div class="block">
                    <img src="img/aboutUs/team1.png" alt="">
                    <h3>John Peter</h3>
                    <span>COO</span>
                </div>
                <div class="block">
                    <img src="img/aboutUs/team2.png" alt="">
                    <h3>John Peter</h3>
                    <span>COO</span>
                </div>
                <div class="block">
                    <img src="img/aboutUs/team3.png" alt="">
                    <h3>John Peter</h3>
                    <span>COO</span>
                </div>
                <div class="block">
                    <img src="img/aboutUs/team4.png" alt="">
                    <h3>John Peter</h3>
                    <span>COO</span>
                </div>
            </div>
        </div>

        <?php require_once "includes/email.php" ?>
    </div>

    <?php require_once "includes/footer.php" ?>
</body>
</html>