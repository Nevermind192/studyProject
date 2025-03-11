<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php require_once "includes/header.php" ?>

        <div class="hero container">
            <div class="hero--info">
                <h2>3D game Dev </h2>
                <h1>Work that we produce for our clients</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                <button class="btn">Get more details</button>
            </div>
            <img src="img/home/joystick.svg" alt="">
        </div>

        <div class="container trending">
            <a href="/trending.php" class="see-all">SEE ALL</a>
            <h3>Currently Trending Games</h3>

            <?php
            $pdo = include_once('connection.php');

            $sql = "SELECT * FROM trending ORDER BY followers DESC LIMIT 4";
            $stmt = $pdo->prepare($sql);

            try
            {
                $stmt->execute();
                $games = $stmt->fetchAll(PDO::FETCH_OBJ);
            }
            catch (PDOException $exception)
            {
                echo "<p class='error'>Ошибка загрузки игр: " . htmlspecialchars($exception->getMessage()) . "</p>";
                $games = [];
            }
            ?>

            <?php if (!empty($games)): ?>
                <div class="games">
                    <?php foreach ($games as $game): ?>
                        <div class="block">
                            <img src="img/home/<?= htmlspecialchars($game->image) ?>" alt="Game Image">
                            <span><img src="img/home/fire.svg" alt=""> <?= htmlspecialchars($game->followers) ?> Followers</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="no-games">No trending games available.</p>
            <?php endif; ?>
        </div>

        <div class="container big-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="container banner">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <img src="img/home/banner.png" alt="">
        </div>
    </div>

    <div class="features">
        <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="info">
            <div class="block">
                <img src="img/home/features1.png" alt="">
                <p>Mobile Game Development</p>
                <img src="img/home/arrow.png" alt="">
            </div>
            <div class="block">
                <img src="img/home/features2.png" alt="">
                <p>PC Game Development</p>
                <img src="img/home/arrow.png" alt="">
            </div>
            <div class="block">
                <img src="img/home/features3.png" alt="">
                <p>PS4 Game Development</p>
                <img src="img/home/arrow.png" alt="">
            </div>
            <div class="block">
                <img src="img/home/features4.png" alt="">
                <p>AR/VR Solutions</p>
                <img src="img/home/arrow.png" alt="">
            </div>
            <div class="block">
                <img src="img/home/features5.png" alt="">
                <p>AR/VR design</p>
                <img src="img/home/arrow.png" alt="">
            </div>
            <div class="block">
                <img src="img/home/features6.png" alt="">
                <p>3D Modelings</p>
                <img src="img/home/arrow.png" alt="">
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="images">
                <img src="img/home/project1.png" alt="">
                <img src="img/home/project2.png" alt="">
                <img src="img/home/project3.png" alt="">
            </div>
            <div class="images">
                <img src="img/home/project5.png" alt="">
                <img src="img/home/project4.png" alt="">
                <img src="img/home/project6.png" alt="">
            </div>
            <a href="#" class="see-all">SEE ALL</a>
        </div>

        <?php require_once "includes/email.php" ?>
    </div>

    <?php require_once "includes/footer.php" ?>
</body>
</html>