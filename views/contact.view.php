<?php
<<<<<<< HEAD
=======
// Include the header file
>>>>>>> 6b97e084bcb4c77a00e82fabec0b782ad0fb261c
require_once 'views/inserts/Header.php';
?>

<form class="Contact-form" action="/contact" method="post">
<<<<<<< HEAD
    <label for="name"><?php 
    echo "First and or Last Name:";
    if (isset($nameErr)) {
        echo "<script type='text/javascript'>alert('$nameErr');</script>";
    }
    ?></label>
    <input class="contact-input" type="text" name="name" id="name-area" required />
=======
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
    
>>>>>>> 6b97e084bcb4c77a00e82fabec0b782ad0fb261c
    <label for="mail">Email:</label>
    <input class="contact-input" type="email" name="mail" id="mail-area" required />

    <label for="message">Message:</label>
    <textarea class="contact-input" name="message" id="message-area" rows="10" cols="50" required></textarea>

    <button class="contact-button" type="submit">Submit</button>
<<<<<<< HEAD
    <?php
=======
    
    <?php
    // If there is a thank you message, display it
>>>>>>> 6b97e084bcb4c77a00e82fabec0b782ad0fb261c
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