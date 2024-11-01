<?php 
require_once 'views/inserts/Header.php';
?>
<html>
<form class="Contact-form" action="/contact" method="post">
    <label for="name">First and/or Last name:</label>
    <input class="contact-input" type="text" name="name" id="name-area" required />

    <label for="mail">Email:</label>
    <input class="contact-input" type="email" name="mail" id="mail-area" required />

    <label for="message">Message:</label>
    <textarea class="contact-input" name="message" id="message-area" rows="10" cols="50" required></textarea>

    <button class="contact-button" type="submit">Submit</button>
</form>


   </form>
</html>
<?php
require_once 'views/inserts/Footer.php';
?>