<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MixologyHub</title>
    <link rel="stylesheet" href="/phpWebSite/src/view/css/style.css">
    <script src="/phpWebSite/src/view/js/scripts.js" defer></script>
</head>
<body>
<header class="container">
    <span class="logo">MixologyHub</span>
    <nav>
        <ul>
            <li><a href="\phpWebSite\src\view\templates\home.php">Home</a></li>
            <li><a href="#">Find</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="\phpWebSite\src\view\templates\about.php">About Us</a></li>
            <li class="btn"><a href="\phpWebSite\src\view\templates\contacts.php">Contacts</a></li>
        </ul>
    </nav>
</header>

<div class="registration">
    <div class="container">
        <form action="\phpWebSite\src\model\register.php" method="post" enctype="multipart/form-data">
            <h2>Registration</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Alex" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="****************" required>

            <label for="repassword">Password again</label>
            <input type="password" id="repassword" name="repassword" placeholder="****************" required>

            <button type="submit" id="submit">Register</button>

            <p>I already have an <a href="#">account</a></p>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php';?>

<a href="#" class="scroll-to-top" id="scrollToTop"><img src="/phpWebSite/assets/images/arrow.png" alt="Scroll to top" /></a>

</body>
</html>