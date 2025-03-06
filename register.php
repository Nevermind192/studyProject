<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = trim($_POST["login"]);
    $username = trim($_POST["username"]);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm-password']);

    if (!$login || strlen($login) < 2)
    {
        $error = "ERROR: The login must be at least 2 characters long.";
    }
    else if (!$username || strlen($username) < 2)
    {
        $error = "ERROR: The username must be at least 2 characters long.";
    }
    else if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = "ERROR: Please enter a valid email address.";
    }
    else if ($password != $confirmPassword)
    {
        $error = "ERROR: The passwords do not match.";
    }
    else if (!$password || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password))
    {
        $error = "ERROR: Password must contain at least 8 characters, including uppercase, lowercase, a number, and a special character.";
    }
    else
    {
        try
        {
            $pdo = new PDO('mysql:host=localhost;dbname=studyProject', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login OR email = :email");
            $stmt->execute(['login' => $login, 'email' => $email]);

            if ($stmt->fetch())
            {
                $error = "ERROR: User with this login or email already exists.";
            }
            else
            {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (login, username, email, password) VALUES (:login, :username, :email, :password)");
                $stmt->execute([
                    'login' => $login,
                    'username' => $username,
                    'email' => $email,
                    'password' => $passwordHash
                ]);

                header("Location: login.php");
            }
        }
        catch (PDOException $e)
        {
            $message = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="js/main.js"></script>
</head>
<body>
<div class="wrapper">
    <?php require_once "includes/header.php" ?>

    <div class="registration form-section container">
        <h2>Registration</h2>
        <p>Enter all the necessary information for successful registration.</p>

        <form method="POST" action="register.php">
            <div class="inline">
                <div>
                    <label for="login">Login</label>
                    <input type="text" id="login" placeholder="Enter your login" name="login"
                           value="<?php echo htmlspecialchars($_POST['login']) ?? '' ?>" required>
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username" name="username"
                           value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>" required>
                </div>
            </div>
            <label for="email-address">Email</label>
            <input type="email" id="email-address" class="one-line" placeholder="Enter your email address" name="email"
                   value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>" required>

            <label for="password">Password</label>
            <input type="password" id="password" class="one-line" placeholder="Create a password" name="password" required>

            <label for="confirm-password">Confirm password</label>
            <input type="password" id="confirm-password" class="one-line" placeholder="Confirm your password" name="confirm-password" required>

            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>

<?php require_once "includes/footer.php" ?>
</body>
</html>
