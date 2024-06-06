<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Cat server</title>

        <meta charset="UTF-8">
        <meta name="keywords" content="meme, cat, server">
        <meta name="description" content="Just some cat">
        <meta name="author" content="Vhelen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css"> 
    </head>

    <body>
        <div class="title">
            <h1>Welcome to my cat server!</h1>
        </div>
        
        <div class="meme">
            <?php
                $files = glob("img/*");
                $random_file = $files[array_rand($files)];
                echo '<img src="img/'.basename($random_file).'" width="600" height="600" >';
            ?>
        </div>

        <div class="footer">
            <p>I hope this website bring u happiness in this dark world 🐈</p>

            <form action="index.php" method="post" enctype="multipart/form-data">
                You can uplaod your own cat:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload cat" name="submit">
            </form>

            <?php
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                if(isset($_POST["submit"])) {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "<p>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>Wait the review by admin to see it in the collection.</p>";
                    } else {
                        echo "<p>Sorry, there was an error uploading your file.</p>";
                    }
                }
            ?>
        </div>
    </body>



