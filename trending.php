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

    <div class="container trending">
        <h3>Currently Trending Games</h3>

        <?php
        $pdo = include_once('connection.php');

        $sql = "SELECT * FROM trending ORDER BY id ASC ";
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
</div>

<?php require_once "includes/footer.php" ?>
</body>
</html>