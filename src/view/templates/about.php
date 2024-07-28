<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MixologyHub</title>
    <link rel="stylesheet" href="/phpWebSite/src/view/css/style.css">
    <script src="/phpWebSite/src/view/js/scripts.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <header class="container">
        <span class="logo">MixologyHub</span>
        <nav>
            <ul>
                <li><a href="\phpWebSite\src\view\templates\home.php">Home</a></li>
                <li><a href="#">Find</a></li>
                <li><a href="#">Profile</a></li>
                <li class="active"><a href="\phpWebSite\src\view\templates\about.php">About Us</a></li>
                <li class="btn"><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>

        <div class="hero-about container">
            <div class="info">
                <h1>danya grachev</h1>
                <p>backend/python developer</p>
                <button class="btn">Get in touch</button>
            </div>
            <img src="" alt="">
        </div>
    </div>

<?php require_once __DIR__ . '/footer.php';?>

<a href="#" class="scroll-to-top" id="scrollToTop"><img src="/phpWebSite/assets/images/arrow.png" alt="Scroll to top" /></a>

</body>
</html>