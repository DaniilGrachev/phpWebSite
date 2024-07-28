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
                    <li class="active"><a href="\phpWebSite\src\view\templates\index.php">Home</a></li>
                    <li><a href="#">Find</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="\phpWebSite\src\view\templates\about.php">About Us</a></li>
                    <li class="btn"><a href="#">Contacts</a></li>
                </ul>
            </nav>
        </header>

        <div class="hero container">
            <div class="hero--info">
                <h2>MixologyHub</h2>
                <h1>We introduce you a large hub of cocktails.</h1>
                <p>Everyone can use this site to embellish his evening!</p>
                <button class="btn">Let's get started...</button>
            </div>
            <img src="/phpWebSite/assets/images/cocktail-home.png" alt="Cocktail Image" style="width: 400px; height: 600px;">
            <img src="/phpWebSite/assets/images/ice-cubes-home.png" alt="Ice Cubes Image" style="width: 200px; height: 360px; top: 190px; right: 290px;">
        </div>

        <div class="container trending">
            <a href="#" class="see-all">SEE ALL</a>
            <h3>Currently Trending Receipts</h3>

            <div class="trending-cocktails">
                <div class="block">
                    <img src="/phpWebSite/assets/images/aperol-trending.jpg" alt="Aperol">
                    <span><img src="/phpWebSite/assets/images/flame-trending.png" alt="Flame">Aperol</span>
                </div>
                <div class="block">
                    <img src="/phpWebSite/assets/images/margarita-trending.jpg" alt="Margarita">
                    <span><img src="/phpWebSite/assets/images/flame-trending.png" alt="Flame">Margarita</span>
                </div>
                <div class="block">
                    <img src="/phpWebSite/assets/images/tekilasunrise-trending.jpg" alt="Tekila-sunrise">
                    <span><img src="/phpWebSite/assets/images/flame-trending.png" alt="Flame">Tequila Sunrise</span>
                </div>
                <div class="block">
                    <img src="/phpWebSite/assets/images/mohito-trending.jpg" alt="Mohito">
                    <span><img src="/phpWebSite/assets/images/flame-trending.png" alt="Flame">Mohito</span>
                </div>
            </div>

        </div>

        <div class="container big-text">
            <p>Welcome to our website dedicated to the art of cocktail making! Here you'll find a wide range of recipes to suit any taste, from classic drinks to modern mixes. Our goal is to help you become a true cocktail master, whether you're a novice bartender or an experienced mixologist. Dive into the world of flavors, experiment with ingredients, and create your own unique drinks. Your journey into the world of cocktails starts here!
            </p>
        </div>

        <div class="container banner">
            <h3>Our Website Features</h3>
            <ul>
                <li><span>1</span><b>Find a Recipe:</b> Use the convenient search by name to quickly find the recipe for your favorite cocktail.</li>
                <li><span>2</span><b>Ingredient Search:</b> Specify the ingredients you have, and we'll suggest cocktail recipes you can make.</li>
                <li><span>3</span><b>Create a Profile and Add Your Own Recipes:</b> Register and create your unique profile, where you can publish and share your own recipes with other users.</li>
            </ul>
            <img src="/phpWebSite/assets/images/gendalf-home.jpg" alt="">
            <p>Join our community and start your journey into the world of cocktails today!</p>
        </div>

        <div class="container email">
            <h3>Subscribe to the newsletter</h3>
            <p>Get news about new trending cocktails and suggestions for you, Dear User!</p>
            <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Subscribe to receive the latest news and updates about site and other!</p>
                </div>
                <div>
                    <input type="email" id="emailLetter" placeholder="Enter email address">
                    <button onclick="checkEmailLetter()">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once __DIR__ . '/footer.php';?>

    <a href="#" class="scroll-to-top" id="scrollToTop"><img src="/phpWebSite/assets/images/arrow.png" alt="Scroll to top" /></a>

    <script>
        function checkEmailLetter(){
            let email = document.querySelector('#emailLetter').value;
            if(!email.includes('@')) alert('Incorrect email!');
            else if(!email.includes('.')) alert('Incorrect email!');
            else alert('Successful!');
        }
    </script>

</body>
</html>