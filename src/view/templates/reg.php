<?php
require_once __DIR__ . '/../../controller/helpers.php';

?>
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
            <input type="text"
                   id="name"
                   name="name"
                   placeholder="Alex"
                   value="<?php echo oldValue('name'); ?>"
                <?php validationErrorAttr('name'); ?>
            >
            <?php if(hasValidationError('name')): ?>
                <small><?php validationErrorMessage('name'); ?></small>
            <?php endif; ?>


            <label for="email">Email</label>
            <input type="text"
                   id="email"
                   name="email"
                   placeholder="example@gmail.com"
                   value="<?php echo oldValue('email'); ?>"
                <?php validationErrorAttr('email'); ?>
            >
            <?php if(hasValidationError('email')): ?>
                <small><?php validationErrorMessage('email'); ?></small>
            <?php endif; ?>


            <label for="password">Password</label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="****************"
                <?php validationErrorAttr('password'); ?>
            >
            <?php if(hasValidationError('password')): ?>
                <small><?php validationErrorMessage('password'); ?></small>
            <?php endif; ?>


            <label for="repassword">Password again</label>
            <input type="password"
                   id="conf_password"
                   name="conf_password"
                   placeholder="****************"
                <?php validationErrorAttr('conf_password'); ?>
            >
            <?php if(hasValidationError('conf_password')): ?>
                <small><?php validationErrorMessage('conf_password'); ?></small>
            <?php endif; ?>


            <button type="submit" id="submit">Register</button>

            <p>I already have an <a href="#">account</a></p>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php';?>

<a href="#" class="scroll-to-top" id="scrollToTop"><img src="/phpWebSite/assets/images/arrow.png" alt="Scroll to top" /></a>

</body>
</html>