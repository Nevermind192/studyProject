
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
        <p><br><br>Здесь можно будет изменять свои данные</p>
    </div>

    <?php require_once "includes/footer.php" ?>
</div>
</body>
</html>
