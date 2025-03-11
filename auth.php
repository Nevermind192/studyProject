<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=studyProject', 'root', '');
        $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login OR email = :login");
        $stmt->execute(['login' => $login, 'email' => $login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0)
        {
            if (password_verify($password, $user['password']))
            {
                setcookie('login', $login, time() + 3600 * 24 * 30, "/");
                header('Location: user.php');
            }
            else
            {
                $error = "ERROR: Wrong login or password";
            }
        }
        else
        {
            $error = "ERROR: Wrong login or password";
        }
    }
    catch(PDOException $exception)
    {
        var_dump ($exception->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php require_once "includes/header.php" ?>

        <div class="login form-section container">
            <h2>Авторизация</h2>
            <p>Добро пожаловать!</p>
            <form method="POST" action="auth.php">
                <label for="login">Login</label>
                <input type="text" id="login" class="one-line" placeholder="Enter your login or email address" name="login"
                       value="<?php echo htmlspecialchars($_POST['login']) ?? '' ?>" required>

                <label for="password">Password</label>
                <input type="password" id="password" class="one-line" placeholder="Create a password" name="password" required>

                <?php if ($error): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endif; ?>

                <button type="submit">Sign In</button>
            </form>
        </div>

        <?php require_once "includes/footer.php" ?>
    </div>
</body>
</html>
