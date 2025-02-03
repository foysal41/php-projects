<?php 

    $file ="CV_Foysal_PHP.pdf";
    $file_size = filesize($file);

    if(isset($_POST['submit'])){
        header("Location:read.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Pdfs Using PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="hero">Read pdfs Using php</h1> 
        </div>

        <br><br><br><br>

        <div class="wrapper">
            <img src="book.png" alt="" class="image" height="300px">
        </div>
        <br><br><br><br>
        <div class="wrapper">
            <form action="" method="POST">
                <button type="submit" name="submit" value="submit">Read PDF</button>
                <p>File Size: <?php echo round($file_size/1024,2)?> KB</p>
            </form>
        </div>

        <div class="wrapper">
            <h3>Made with <span>by Foysal jaman</span></h3>
        </div>
    </div>
</body>
</html>