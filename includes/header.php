<header class="container2">
    <span class="logo">logo</span>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about.php">About us</a></li>
            <li><a href="/services.php">Portfolio</a></li>
            <li><a href="#">News</a></li>
            <li class="btn"><a href="/contacts.php">Contact us</a></li>

            <div class="auth-buttons">
            <?php
                if(isset($_COOKIE['login']))
                {
                    echo '<li class="btn auth"><a href="/user.php">My account</a></li>';
                }
                else
                {
                    echo '<li class="btn auth"><a href="/register.php">Sign Up</a></li>
                          <li class="btn auth"><a href="/auth.php">Sign In</a></li>';
                }
            ?>
            </div>
        </ul>
    </nav>
</header>