<?php
require_once 'views/inserts/Header.php';
?>

<form class="Contact-form" action="/contact" method="post">
    <label for="name"><?php 
    echo "First and or Last Name:";
    if (isset($nameErr)) {
        echo "<script type='text/javascript'>alert('$nameErr');</script>";
    }
    ?></label>
    <input class="contact-input" type="text" name="name" id="name-area" required />
    <label for="mail">Email:</label>
    <input class="contact-input" type="email" name="mail" id="mail-area" required />

    <label for="message">Message:</label>
    <textarea class="contact-input" name="message" id="message-area" rows="10" cols="50" required></textarea>

    <button class="contact-button" type="submit">Submit</button>
    <?php
    if (isset($thankYou)) {
        echo $thankYou;
    }
    ?>
</form>
</html>
<?php
require_once 'views/inserts/Footer.php';
?>