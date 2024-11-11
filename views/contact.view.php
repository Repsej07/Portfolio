<?php
// Include the header file
require_once 'views/inserts/Header.php';
?>

<form class="Contact-form" action="/contact" method="post">
    <label for="name">
        <?php 
        // Display the label for the name input
        echo "First and or Last Name:";
        
        // If there is an error with the name input, display an alert
        if (isset($nameErr)) {
            echo "<script type='text/javascript'>alert('$nameErr');</script>";
        }
        ?>
    </label>
    <input class="contact-input" type="text" name="name" id="name-area" required />
    
    <label for="mail">Email:</label>
    <input class="contact-input" type="email" name="mail" id="mail-area" required />

    <label for="message">Message:</label>
    <textarea class="contact-input" name="message" id="message-area" rows="10" cols="50" required></textarea>

    <button class="contact-button" type="submit">Submit</button>
    
    <?php
    // If there is a thank you message, display it
    if (isset($thankYou)) {
        echo $thankYou;
    }
    ?>
</form>
</html>

<?php
// Include the footer file
require_once 'views/inserts/Footer.php';
?>