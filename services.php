<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/services.css">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php require_once "includes/header.php" ?>

        <div class="statistic container">
            <a href="/">Home</a> > <a class="active" href="/services.php">Services</a>
            <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="blocks">
                <div class="block">
                    <img src="img/services/user.png" alt="">
                    <div class="info">
                        <h3>90+</h3>
                        <span>Clients</span>
                    </div>
                </div>
                <hr>
                <div class="block">
                    <img src="img/services/location.png" alt="">
                    <div class="info">
                        <h3>30+</h3>
                        <span>Countries</span>
                    </div>
                </div>
                <hr>
                <div class="block">
                    <img src="img/services/server.png" alt="">
                    <div class="info">
                        <h3>50+</h3>
                        <span>Projects</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="video container">
            <div class="video-wrapper">
                <video id="main-video" controls poster="img/services/Video%20Image.png">
                    <source src="video/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-button" id="play-button">
                    <img src="img/services/play-button.png" alt="Play">
                </div>
            </div>
            <div class="video-info">
                <h1>Lorem Ipsum is simply dummy text.</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy.</p>
                <ul>
                    <li><img src="img/services/check.png" alt="">Lorem Ipsum is simply</li>
                    <li><img src="img/services/check.png" alt="">Lorem Ipsum is simply</li>
                    <li><img src="img/services/check.png" alt="">Lorem Ipsum is simply</li>
                    <li><img src="img/services/check.png" alt="">Lorem Ipsum is simply</li>
                </ul>
            </div>
        </div>

        <div class="banner1 game-section container">
            <div class="info">
                <h1>Lorem Ipsum is simply dummy text dummy text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">Read More</button>
            </div>
            <img src="img/services/game-banner1.png" alt="">
        </div>

        <div class="banner2 game-section container">
            <img src="img/services/game-banner2.png" alt="">
            <div class="info">
                <h1>Lorem Ipsum is simply dummy text dummy text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">Read More</button>
            </div>
        </div>

        <div class="banner3 game-section container">
            <div class="info">
                <h1>Lorem Ipsum is simply dummy text dummy text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">Read More</button>
            </div>
            <img src="img/services/game-banner3.png" alt="">
        </div>

        <?php require_once "includes/email.php" ?>
    </div>

    <?php require_once "includes/footer.php" ?>
</body>
</html>