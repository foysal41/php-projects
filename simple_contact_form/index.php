<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Contact Us</h2>

<?php

if (isset($_GET['success'])) {
    echo "<p style='color: green;'>Message sent successfully!</p>";
} elseif (isset($_GET['error'])) {
    echo "<p style='color: red;'>Error: " . htmlspecialchars($_GET['error']) . "</p>";
}
?>


    <div class="container">
        <div class="row">
            <form action="process.php" method="POST">
                <label for="Name">Name</label>
                <input type="text" name="name">

                <label for="Email">Email</label>
                <input type="email" name="email">

                <label for="Message">Message</label>
                <textarea name="message" id="" cols="20" rows="10"> </textarea>

                <button type="submit">Send</button>
            </form>
        </div>
    </div>


</body>

</html>