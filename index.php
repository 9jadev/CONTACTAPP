<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <form method="post">
        <?php 
            if (isset($_POST["submit"])) {
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $content = $_POST["content"];
                // print_r($_POST);
                $name = $fullname.'.txt';
                $conent = json_encode($_POST);
                if (file_put_contents($name, $conent)) {
                    echo " Done Successfully";
                }
            }
        ?>
        <p><span>Fullname</span> <input type="text" name="fullname" placeholder="Enter Fullname" required/></p>
        <p><span>Email</span> <input type="text" name="email" placeholder="Enter Fullname" required/></p>
        <p>
            <span>Content</span>
            <textarea name="content" cols="30" rows="10" placeholder="Enter Content"></textarea>
        </p>
        <p><button type="submit" name="submit"> Submit Form </button></p>
    </form>
</body>
</html>