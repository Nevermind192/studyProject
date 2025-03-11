<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $image = $_POST["image"];
    $followers = $_POST["followers"];

    if($followers < 0)
    {
        $error = "You can add more than 0 followers";
    }
    else
    {
        $pdo = include_once "connection.php";
        $sql = "INSERT INTO trending (image, followers) VALUES (:image, :followers)";
        $stmt = $pdo->prepare($sql);

        try
        {
            $stmt->execute([':image' => $image, ':followers' => $followers]);
            header("location: trending.php");
        }
        catch (PDOException $exception)
        {
            $error = "Возникла ошибка при добавлении игры: {$exception->getMessage()}";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="js/main.js"></script>
</head>
<body>
<div class="wrapper">
    <?php require_once "includes/header.php" ?>

    <div class="registration form-section container">
        <h2>Личный кабинет</h2>
        <p>Добро пожаловать, <b><?= $_COOKIE['login'] ?></b></p>
        <form method="POST" action="user.php">
            <label for="image">Name of image</label>
            <input type="text" id="image" class="one-line" placeholder="Enter the name of image" name="image"
                   value="<?= htmlspecialchars($_POST['image']) ?? '' ?>" required>

            <label for="followers">Number of followers</label>
            <input type="text" id="followers" class="one-line" placeholder="Enter the number of followers" name="followers"
                   value="<?= htmlspecialchars($_POST['image']) ?? '' ?>" required>

            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <button type="submit">Add</button>
        </form>
    </div>

    <?php require_once "includes/footer.php" ?>
</div>
</body>
</html>
