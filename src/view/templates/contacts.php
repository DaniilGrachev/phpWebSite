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
                <li><a href="/phpWebSite/src/view/templates/home.php">Home</a></li>
                <li><a href="#">Find</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="/phpWebSite/src/view/templates/about.php">About Us</a></li>
                <li class="btn"><a href="/phpWebSite/src/view/templates/contacts.php">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <div class="container hero-contacts">
        <h1>Lorem ipsum</h1>
        <p>loreeeeeem ipsum</p>
        <img src="/phpWebSite/assets/images/World-Map-contact.png" alt="">
    </div>

    <div class="feedback">
        <div class="container">
            <h2>Say Hello</h2>
            <p>lorem pipsun</p>

            <form>
                <div class="inline">
                    <div>
                        <label>First Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text">
                    </div>
                </div>
                <label>Email address</label>
                <input type="email" class="one-line">
                <label>Message</label>
                <textarea class="one-line"></textarea>

                <button type="button">Get in touch</button>
            </form>
        </div>
    </div>

<?php require_once __DIR__ . '/footer.php';?>

<a href="#" class="scroll-to-top" id="scrollToTop"><img src="/phpWebSite/assets/images/arrow.png" alt="Scroll to top" /></a>

</body>
</html>