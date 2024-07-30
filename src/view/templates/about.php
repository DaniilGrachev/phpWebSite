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
                <li class="btn"><a href="\phpWebSite\src\view\templates\contacts.php">Contacts</a></li>
            </ul>
        </nav>
    </header>

        <div class="hero-about container">
            <div class="info">
                <h1>Daniil Grachev</h1>
                <h3>Junior Python/PHP Developer</h3>
                <p>Young programmer from Russia, Volgograd.</p>
                <button class="btn">Get in touch</button>
            </div>
            <img src="/phpWebSite/assets/images/me-about.jpg" alt="Daniil Grachev">
        </div>

        <div class="container work">
            <h2>Work with me</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">GitHub</span>
                    <h3>lorem ipsum</h3>
                    <p>lorem ipsum</p>
                </div>
                <div class="block">
                    <span class="badge brown">Telegram</span>
                    <h3>lorem ipsum</h3>
                    <p>lorem ipsum</p>
                </div>
                <div class="block">
                    <span class="badge green">WhatsUp</span>
                    <h3>lorem ipsum</h3>
                    <p>lorem ipsum</p>
                </div>
            </div>
        </div>
    </div>

<?php require_once __DIR__ . '/footer.php';?>

<a href="#" class="scroll-to-top" id="scrollToTop"><img src="/phpWebSite/assets/images/arrow.png" alt="Scroll to top" /></a>

</body>
</html>